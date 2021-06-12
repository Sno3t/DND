<!doctype html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>

<table>
    <tr>
        <form>
            <li> Insert:
                <input type="button"></li>
            <li>Update:
                <input type="button"></li>
            <li>Delete:
                <input type="button"></li>
        </form>


    </tr>

</table>





<?php


$dsn = 'mysql:dbname=dnd;host=localhost';
$user = 'php_user';
$password = '123';

$conn = new PDO($dsn, $user, $password, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);


if ($_SERVER['REQUEST_METHOD'] == 'GET') {

    $name = $_GET['Name'];
    $Body = $_GET['Body'];
    $Sidebar1 = $_GET['Sidebar1'];
    $Sidebar2 = $_GET['Sidebar2'];

    if (empty($SideBar1)) {
        $SideBar1 = NULL;
    }
    if (empty($SideBar2)) {
        $SideBar2 = NULL;
    }

    require_once("login/Insert.php");
    $Insert = new Insert();
    $Insert->InsertPage($name,$Body,$Sidebar1,$Sidebar2);



    $pdo = 'SELECT `ID`, `Name`, `Body`, `SideBar`, `SideBar2` FROM `characters` WHERE Name = :name';

    if ($stmt = $conn->prepare($pdo)) {
        $stmt->bindParam(':name', $character);
        if ($stmt->execute()) {
            $count = $stmt->rowCount();
            $row = $stmt->fetch(PDO::FETCH_BOTH);
            if ($count == 1 && !empty($row)) {
                //  echo $row['Name'];
            } else {
                echo "Throw new 404 page"; // Character does not exist
                die;
            }
        } else {
            echo "Statement error";
        }
    } else {
        echo "Connection error";
    }
    echo "a";
}
//--------------------------------------------
// Peter was here rando
//$r = rand(0, 20) . "<br>";
//$r2 = rand(1, 3);
?>


</body>

</html>