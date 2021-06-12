<!doctype html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        /*--------------------------------------------------------------*/
        /*css reset*/
        html, body, div, span, applet, object, iframe,
        h1, h2, h3, h4, h5, h6, p, blockquote, pre,
        a, abbr, acronym, address, big, cite, code,
        del, dfn, em, img, ins, kbd, q, s, samp,
        small, strike, strong, sub, sup, tt, var,
        b, u, i, center,
        dl, dt, dd, ol, ul, li,
        fieldset, form, label, legend,
        table, caption, tbody, tfoot, thead, tr, th, td,
        article, aside, canvas, details, embed,
        figure, figcaption, footer, header, hgroup,
        menu, nav, output, ruby, section, summary,
        time, mark, audio, video {
            margin: 0;
            padding: 0;
            border: 0;
            font-size: 100%;
            font: inherit;
            vertical-align: baseline;
        }

        article, aside, details, figcaption, figure,
        footer, header, hgroup, menu, nav, section {
            display: block;
        }

        body {
            line-height: 1;
        }

        ol, ul {
            list-style: none;
        }

        blockquote, q {
            quotes: none;
        }

        blockquote:before, blockquote:after,
        q:before, q:after {
            content: '';
            content: none;
        }

        table {
            border-collapse: collapse;
            border-spacing: 0;
        }

        /*--------------------------------------------------------------*/


        .title {
            padding-left: 45%;
        }

        .module {
            all: unset;
        }

        hr {
            color: white;
        }

        @font-face {
            font-family: "Philo";
            src: url("Fonts/Philosopher-Regular.ttf");

        }

        @font-face {
            font-family: "Title";
            src: url("Fonts/Hokyaa-Sans-Reg.otf");

        }

        h1, h2, h3, h4, h5 {
            font-family: "Title";
            font-size: 29px;
        }

        p {
            font-family: "Philo";
        }

        a {
            text-decoration: none;
        }

        a:hover, a:active, a:visited {
            /*background-color: red;*/
            color: black;
            text-decoration: none;
            text-decoration: underline;

        }

        .nav2 {
            padding-top: 10px;
            padding-bottom: 10px;
            display: flex;
            outline: black solid 1px;
            justify-content: space-around;
            /*position: absolute;*/
            color: white;

        }


        .grid-container {
            display: grid;
            grid-template-columns: 200px 1fr 1fr 1fr;
            grid-template-rows: 100px 50px 2fr 3fr;
            gap: 0px 0px;
            grid-template-areas: "Logo Banner Banner Banner" "Nav Nav Nav Nav" "Recoom Body Body Body" "Recoom Body Body Body";
        }

        .Nav {
            grid-area: Nav;
            background-color: black;
            padding: 2px;
            font-family: Philo;

        }

        .Recoom {
            grid-area: Recoom;
            background-color: blue;
            color: white;
            padding: 4px;
            padding-left: 10%;
            padding-right: 10%;


        }

        .Body {
            grid-area: Body;
            background-color: yellow;
            padding: 2px;
            padding-top: 5px;

        }

        .Banner {
            grid-area: Banner;
            background-color: green;
            color: white;
            padding: 2px
        }

        .Logo {
            grid-area: Logo;
            background-color: purple;
            color: white;
            padding: 2px
        }


        .vl {
            border-left: 2px solid white;
            height: 70px;
            margin-top: -20px;
        }

        .aa {
            font-size: 20px;
        }

        .Recomtitle {
            padding-top: 10px;
            font-size: 25px;
        }

    </style>

<body class="module">

<form action="" method="get">
    Name:<br>
    <input type="text" name="Name"> <br>
    Body: <br>
    <textarea name="Body" cols="40" rows="5"></textarea> Put a &#60;br> after every break and 2 for a new paragraf.<br>
    Sidebar1:<br>
    <input type="text" name=Sidebar1"> Leave empty if you dont know anything<br>
    Sidebar2:<br>
    <input type="text" name="Sidebar2"> Leave empty if you dont know anything<br>
    <input type="submit">
</form>

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

    if (empty($name)) {
        echo "You need to insert a name.";
        die;
    } elseif (empty($Body)) {
        echo "You need to insert a body.";
        die;
    }

    if (!isset($_GET['Sidebar1'])) {
        $SideBar1 = NULL;
    }
    if (!isset($_GET['Sidebar2'])) {
        $SideBar2 = NULL;
    }

    require_once("login/Insert.php");
    $Insert = new Insert();
    $Insert->InsertPage($name, $Body, $Sidebar1, $Sidebar2);


    $pdo = 'SELECT `ID`, `Name`, `Body`, `SideBar`, `SideBar2` FROM `characters` WHERE Name = :name';

    if ($stmt = $conn->prepare($pdo)) {
        $stmt->bindParam(':name', $character);
        $stmt->execute();
    } else {
        echo "Statement error";
    }
//    } else {
//        echo "Connection error";
//    }
}


//            $count = $stmt->rowCount();
//            $row = $stmt->fetch(PDO::FETCH_BOTH);
//            if ($count == 1 && !empty($row)) {
//                echo "Done it";
//            } else {
//                echo "Throw new 404 page"; // Character does not exist
//                die;

?>


<?php
//
//        $pdo = 'SELECT * FROM `characters` ORDER BY Date_added';//ORDER BY Date_added';
//        if ($stmt = $conn->prepare($pdo)) {
//            //      $stmt->bindParam(':name', $character);
//            if ($stmt->execute()) {
//                $count = $stmt->rowCount();
//                //  $row = $stmt->fetch(PDO::FETCH_ASSOC);
//                foreach ($stmt->fetchAll(PDO::FETCH_ASSOC) as $row) {
//                    echo " <li><a href='Characters.php?Character=$row[Name]'>$row[Name]</a></li>";
//                }
//            } else {
//                echo "Throw new 404 page"; // Character does not exist
//                die;
//            }
//        } else {
//            echo "Statement error";
//        }
//        } else {
//            echo "Connection error";
//        }


?>


</body>

</html>