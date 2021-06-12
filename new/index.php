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

<?php

$dsn = 'mysql:dbname=dnd;host=localhost';
$user = 'php_user';
$password = '123';

$conn = new PDO($dsn, $user, $password, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

if ($_SERVER['REQUEST_METHOD'] == 'GET') {

// $character = $_GET['Character'];


// echo $row['Name'];


//            if ($count == 1 && !empty($row)) {
//                foreach($row AS $name){
//                    echo $name;
//                }

////--------------------------------------------
//// Peter was here rando
//$r = rand(0, 20) . "<br>";
//$r2 = rand(1, 3);
?>

<table>
    <tr>
        <li>At the moment available pages:</li>
        <?php

        $pdo = 'SELECT * FROM `characters` ORDER BY Date_added';//ORDER BY Date_added';
        if ($stmt = $conn->prepare($pdo)) {
            //      $stmt->bindParam(':name', $character);
            if ($stmt->execute()) {
                $count = $stmt->rowCount();
                //  $row = $stmt->fetch(PDO::FETCH_ASSOC);
                foreach ($stmt->fetchAll(PDO::FETCH_ASSOC) as $row) {
                    echo " <li><a href='Characters.php?Character=$row[Name]'>$row[Name]</a></li>";
                }
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



        ?>

    </tr>
    <tr>
        <li></li>
        <li>Change pages:</li>
        <li><a href="adminpage.php">Stuff</a></li>
    </tr>
    <tr>
        <li>As</li>
    </tr>
</table>

<!--SELECT id, thread_id, user_id, subject, body, date_sent-->
<!--FROM messages WHERE date_sent IN (-->
<!--SELECT MAX( date_sent )-->
<!--        <li><a href="Characters.php?Character=Peter">Character page</a></li>-->
</body>

</html>