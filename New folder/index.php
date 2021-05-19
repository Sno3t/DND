<!doctype html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        /*<!--removes the lines-->*/
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
        }

        p {
            font-family: "Philo";
        }

        a {
            text-decoration: none;
        }

        a:hover, a:active, a:visited {
            background-color: red;
            color: white;
            text-decoration: none;

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
            padding: 2px

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

    </style>

<body class="module">


<div class="grid-container">
    <div class="Nav">
        <div class="nav2">
            <!--    <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ"><img src="skull_PNG82.png"></a>-->
            <a class="vl"></a>
            <a href="">Home</a>
            <a class="vl"></a>
            <a href="">Cum</a>
            <a class="vl"></a>
            <a href="">Hentai</a>
            <a class="vl"></a>
            <a href="">Lore</a>
            <a class="vl"></a>
            <a href="">Spoed</a>
            <a class="vl"></a>
        </div>


    </div>
    <div class="Recoom">
        <h3>Recommended pages:<br>
            <a href=""><p>Page 1</p></a>
            <hr>
            <a href=""><p>Page 2</p></a>

            <?php
            $item = array("Dyre","Peter");
            foreach($item AS $row)
              //  echo "<a href='index.php?character=' $items ><p> .'$items'.</p></a>";
                echo "<a href=index.php?a=" . $row . ">".$row ." </a> <hr>";

            ?>
    </div>
    <div class="Body">
        <h1>Title</h1>
        <hr>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent ullamcorper augue urna, eu vehicula libero
            vestibulum nec. Ut a ex porttitor, convallis justo eget, congue augue. Nullam risus mauris, hendrerit non
            ante
            a, dignissim condimentum odio. Donec sit amet pulvinar ex, tristique scelerisque odio. Quisque pellentesque
            sodales facilisis. Cras euismod urna non elit congue, ac iaculis erat pellentesque. Pellentesque metus urna,
            venenatis sollicitudin fermentum vel, suscipit in turpis. Nulla euismod arcu dolor.

            Cras porta, elit eu facilisis gravida, ex nisi feugiat mauris, at varius felis nunc eu mi. Aliquam sagittis
            metus lacus, id aliquam metus lacinia ac. Suspendisse ac eros sed orci accumsan vulputate a sit amet orci.
            Nullam non massa purus. Ut lacinia scelerisque iaculis. Sed venenatis accumsan egestas. Nunc accumsan
            molestie
            dui, sit amet posuere diam dignissim vel.

            Nulla facilisi. Integer mattis est et metus tristique, non accumsan augue auctor. Nulla eu viverra ligula.
            Suspendisse potenti. Suspendisse lacinia faucibus odio, eu dignissim lacus ullamcorper eget. In id maximus
            sem,
            et posuere elit. Sed suscipit iaculis ornare. In a orci id risus rutrum venenatis. Vestibulum ut ante est.
            Quisque sed arcu odio. Donec turpis orci, gravida sed mauris et, tempor iaculis neque. Vestibulum ultricies
            enim
            ex, eu laoreet diam interdum id.

            Ut ultricies erat eu posuere dignissim. Integer egestas dolor sit amet eleifend dapibus. Phasellus suscipit
            nisl
            in sodales ullamcorper. Pellentesque sed blandit metus, sed ultrices justo. Fusce luctus laoreet libero, ut
            pharetra tortor venenatis vitae. Phasellus luctus, purus ornare imperdiet finibus, tortor turpis sagittis
            ligula, in mollis erat leo eu justo. Proin tempus fringilla neque non rutrum. Praesent auctor nibh in dui
            suscipit, a viverra urna elementum. Cras et massa leo.

            In hac habitasse platea dictumst. Ut neque leo, vestibulum eget nunc vel, lacinia gravida tortor. Ut vel
            odio
            efficitur, sagittis magna sed, mattis ligula. Suspendisse nisi nisi, tempus vel sapien vitae, cursus lacinia
            enim. Sed varius ante quis erat rhoncus, ut posuere sapien hendrerit. Proin a fringilla eros. Lorem ipsum
            dolor
            sit amet, consectetur adipiscing elit. Donec lobortis ligula eget arcu porttitor, a dictum felis suscipit.
            Nunc
            vestibulum, mauris ut euismod gravida, sem justo faucibus mi, ac pharetra lacus lorem et sem. Nulla eget
            vestibulum lectus. In porttitor nunc nibh, in feugiat lacus tristique quis. Nullam tristique lacus non
            lectus
            fermentum eleifend. Sed dapibus et mauris non faucibus.

            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent ullamcorper augue urna, eu vehicula libero
            vestibulum nec. Ut a ex porttitor, convallis justo eget, congue augue. Nullam risus mauris, hendrerit non
            ante
            a, dignissim condimentum odio. Donec sit amet pulvinar ex, tristique scelerisque odio. Quisque pellentesque
            sodales facilisis. Cras euismod urna non elit congue, ac iaculis erat pellentesque. Pellentesque metus urna,
            venenatis sollicitudin fermentum vel, suscipit in turpis. Nulla euismod arcu dolor.

            Cras porta, elit eu facilisis gravida, ex nisi feugiat mauris, at varius felis nunc eu mi. Aliquam sagittis
            metus lacus, id aliquam metus lacinia ac. Suspendisse ac eros sed orci accumsan vulputate a sit amet orci.
            Nullam non massa purus. Ut lacinia scelerisque iaculis. Sed venenatis accumsan egestas. Nunc accumsan
            molestie
            dui, sit amet posuere diam dignissim vel.

            Nulla facilisi. Integer mattis est et metus tristique, non accumsan augue auctor. Nulla eu viverra ligula.
            Suspendisse potenti. Suspendisse lacinia faucibus odio, eu dignissim lacus ullamcorper eget. In id maximus
            sem,
            et posuere elit. Sed suscipit iaculis ornare. In a orci id risus rutrum venenatis. Vestibulum ut ante est.
            Quisque sed arcu odio. Donec turpis orci, gravida sed mauris et, tempor iaculis neque. Vestibulum ultricies
            enim
            ex, eu laoreet diam interdum id.

            Ut ultricies erat eu posuere dignissim. Integer egestas dolor sit amet eleifend dapibus. Phasellus suscipit
            nisl
            in sodales ullamcorper. Pellentesque sed blandit metus, sed ultrices justo. Fusce luctus laoreet libero, ut
            pharetra tortor venenatis vitae. Phasellus luctus, purus ornare imperdiet finibus, tortor turpis sagittis
            ligula, in mollis erat leo eu justo. Proin tempus fringilla neque non rutrum. Praesent auctor nibh in dui
            suscipit, a viverra urna elementum. Cras et massa leo.

            In hac habitasse platea dictumst. Ut neque leo, vestibulum eget nunc vel, lacinia gravida tortor. Ut vel
            odio
            efficitur, sagittis magna sed, mattis ligula. Suspendisse nisi nisi, tempus vel sapien vitae, cursus lacinia
            enim. Sed varius ante quis erat rhoncus, ut posuere sapien hendrerit. Proin a fringilla eros. Lorem ipsum
            dolor
            sit amet, consectetur adipiscing elit. Donec lobortis ligula eget arcu porttitor, a dictum felis suscipit.
            Nunc
            vestibulum, mauris ut euismod gravida, sem justo faucibus mi, ac pharetra lacus lorem et sem. Nulla eget
            vestibulum lectus. In porttitor nunc nibh, in feugiat lacus tristique quis. Nullam tristique lacus non
            lectus
            fermentum eleifend. Sed dapibus et mauris non faucibus.</p>
    </div>
    <div class="Banner">Banner</div>
    <div class="Logo">Logo
<!--    <img src="skull_PNG82.png">-->
    </div>
</div>

</body>

</html>