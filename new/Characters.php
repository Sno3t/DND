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

        .Scraps{
            height: 20px;
            width: 320px;

        }

        .title {
            /*padding-top 90%;*/
            padding-left:250%;
        }

        .module {
            all: unset;
            background-image: url("Pictures/Table.png");
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

        a:link a:active, a:visited {
            /*background-color: red;*/
            color: black;
            text-decoration: none;


        }
        a:hover{
            text-decoration: underline;
        }

        .nav2 {
            padding-top: 10px;
            padding-bottom: 10px;
            display: flex;
            /*outline: black solid 1px;*/
            justify-content: space-around;
            /*position: absolute;*/
            color: black;

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
            /*background-color: black;*/
            padding: 2px;
            font-family: Philo;


        }



        .Recoom {
            grid-area: Recoom;
            /*background-color: blue;*/
            color: white;
            padding: 4px;
            padding-left: 10%;
            padding-right: 10%;
            background-image: url("Pictures/Side.png");
            background-repeat: no-repeat;
            background-size:contain;



        }

        .Body {
            grid-area: Body;
            /*background-color: yellow;*/
            /*padding: 2px;*/
            padding-top: 160px;


        }

        .Banner {
            grid-area: Banner;
            /*background-color: green;*/
            color: white;
            padding: 2px
        }

        .Logo {
            grid-area: Logo;
            /*background-color: purple;*/
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

        .center{
            position: absolute;
            top: 15%;
            left: 20%;
            transform: translate(-75%, -75%);
            color: black;
        }
        .center2{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: black;
        }

        .container {
            position: relative;
            text-align: center;
            color: white;
            z-index: 1;
        }

        .book {

            position: relative;
            text-align: center;
            color: white;
            z-index: 0;

        }

    </style>

<body class="module">

<?php

$dsn = 'mysql:dbname=dnd;host=localhost';
$user = 'php_user';
$password = '123';

$conn = new PDO($dsn, $user, $password, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);




if ($_SERVER['REQUEST_METHOD'] == 'GET') {

    $character = $_GET['Character'];

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
}
//--------------------------------------------
// Peter was here rando
$r = rand(0, 20) . "<br>";
$r2 = rand(1, 3);
?>


<div class="grid-container">
    <div class="Nav">
        <div class="nav2">
<!--                <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ"><img src="skull_PNG82.png"></a>-->

            <a></a>
            <a></a>
            <a></a>
            <div class="container"><a href="index.php" class="Scraps"> <img src="Pictures/Scrap1.png"> <div class="center2">Characters</div> </a></div>

            <div class="container"><a href="" class="Scraps"> <img src="Pictures/Scrap3.png"> <div class="center2">Map</div> </a></div>

            <div class="container"><a href="" class="Scraps"> <img src="Pictures/Scrap2.png"> <div class="center2">Stories of the omen of death</div> </a></div>

            <div class="container"><a href="" class="Scraps"> <img src="Pictures/Scrap3.png"> <div class="center2">Lore</div> </a></div>


        </div>


    </div>
    <div class="Recoom">
        <h1 class="Recomtitle">Recommended pages:</h1><br><br>
        <a href='Characters.php?Character=<?= $row['SideBar'] ?>'><p><?= $row['SideBar'] ?></p></a>
        <hr>
        <a href='Characters.php?Character=<?= $row['SideBar2'] ?>'><p> <?= $row['SideBar2'] ?></p></a>
        <hr>

    </div>
    <div class="Body">


       <div class="book">
           <div class="container">
<!--               <a href="" class="Scraps">-->
                   <img src="Pictures/Book.png">

                   <div class="center">
                       <h1 class="title"><?= $row['Name']; ?></h1> <br>
                       <?= $row['Body']; ?>
                   </div>
               </a>
           </div>

       </div>
        <?php


        if ($r == 20) {
            if ($r2 == 2) {
                echo "<br> Peter was here!";
            }
        }
        ?>


    </div>
    <div class="Banner"></div>
    <div class="Logo">
        <!--    <img src="skull_PNG82.png">-->
        <?php
//        if ($r == 20) {
//            if ($r2 == 1) {
//                echo "<br> Peter was here!";
//            }
//        }

        ?>
    </div>
</div>

<form action="" method="get">
    <input type="text" name="Character">
</form>

</body>

</html>