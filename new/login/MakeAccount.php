<!doctype html>
<html>
<head>
    <title>Account maken</title>
    <meta charset="utf-8">
</head>
<body>

<h1> Account aanmaken</h1>
<form action="" method="post">
    <table>
        <tr>
            <td>Naam:</td>
            <td><input type="text" value="" name="user"></td>
        </tr>
        <tr>
            <td>Wachtwoord:</td>
            <td><input type="text" value="" name="ww"></td>
        </tr>
        <tr>
            <td>Herhaal Wachtwoord:</td>
            <td><input type="text" value="" name="ww2"></td>
        </tr>
<!--        <tr>-->
<!--            <td>Email:</td>-->
<!--            <td><input type="text" value="" name="email"></td>-->
<!--        </tr>-->
<!--        <tr>-->
<!--            <td>Voornaam</td>-->
<!--            <td><input type="text" value="" name="voor"></td>-->
<!--        </tr>-->
<!--        <tr>-->
<!--            <td>Achternaam</td>-->
<!--            <td><input type="text" value="" name="achter"></td>-->
<!--        </tr>-->
        <tr>
            <td><input type="submit" value="Create account"></td>
        </tr>
    </table>
</form>


<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {


    try {
        $conn = new PDO ('mysql:host=localhost;dbname=dnd', "php_user", "123");

        if (!$_POST["ww"] === $_POST["ww2"]) {
            throw new Exception("Wachtwoord is niet hetzelfde");
        }

      //  $email = $_POST["email"];
        $psswd = PASSWORD_HASH($_POST["ww"], PASSWORD_DEFAULT);
        $name = $_POST["user"];
//        $voorn = $_POST["voor"];
//        $achtern = $_POST["achter"];

        $info = array($name, $psswd);

        $pdo = "INSERT INTO `login`(`ID`,`Username`, `Password` ) VALUES (DEFAULT,?,?);";
        $stmt = $conn->prepare($pdo);
        $stmt->execute($info);

//        session_start();
//        $_SESSION["Verfication"] = true;
//        $_SESSION["Username"] = $name;

        header("Location: ../index.php");

    } catch (PDOException $err) {
        echo "Error code: " . $err->getCode() . ". <br> Error Message: " . $err->getMessage();

    }

}


?>

</body>
</html>

