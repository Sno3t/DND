<!doctype html>
<html>
<head>
    <title>Login pagina</title>
    <meta charset="utf-8">
</head>
<body>
<h1> Login</h1>
<form action="" method="post">
    Email:
    <input type="text" value="" name="User"> <br>
    Wachtwoord:
    <input type="password" value="" name="ww"> <br>
    <input type="submit" value="Inloggen">
</form>
<a href="MakeAccount.php">No account?</a>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {


    try {
        $user = $_POST['User'];
        $pass = $_POST['ww'];

        require_once ("hashing.php");
        $login = new login($user, $pass);
        $login->login($login->namecheck(),$login->passcheck());

    } catch (Exception $e) {
        echo "<br> Error code: " . $e->getCode() . ". <br> Error Message: " . $e->getMessage() . "<br/>";
        die();
    } catch (PDOException $err) {
        echo "<br> Error code: " . $err->getCode() . ". <br> Error Message: " . $err->getMessage();
        die();
    }

}
?>

</body>
</html>