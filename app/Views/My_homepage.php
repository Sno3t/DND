<!doctype html>
<html>
<head>
<style>
    html {
        width: 100%;
        height: 100%;
    }
    body {
        /* The entire body is clickable area. Let the visitor know that. */
        cursor: pointer;
        width: 100%;
        height: 100%;
        /* Set the perspective transform for the page so that our book looks 3D. */
    +perspective: 800px;
        /* Use 3D for body, the book itself and the page containers. */
    +transform-style: preserve-3d;
    }
    .book {
    +transform-style: preserve-3d;
        position: absolute;
    }
    /* Page containers, contain the two sides of the page as children. */
    .book > div {
    +transform-style: preserve-3d;
        position: absolute;
    }
    /* Both sides of a page. These are flat inside the page container, so no preserve-3d. */
    .book > div > div {
        /* Fake some lighting with a gradient. */
        background: +linear-gradient(-45deg, #ffffff 0%, #e5e5e5 100%);
        width: 600px;
        height: 400px;
        overflow: hidden;
        /* Pad the page text a bit. */
        padding: 30px;
        padding-bottom: 80px;
    }
    /* Front of a page */
    .book > div > div:first-child {
        /* The front side of a page should be slightly above the back of the page. */
    +transform: translate3d(0px, 0px, 0.02px);
        /* Add some extra padding for the gutter. */
        padding-left: 40px;
        /* Stylish border in the gutter for visual effect. */
        border-left: 2px solid #000;
    }
    /* Back of a page */
    .book > div > div:last-child {
        /* The back side of a page is flipped. */
    +transform: rotateY(180deg);
        padding-right: 40px;
        border-right: 2px solid #000;
    }
    /* Front cover of the book */
    .book > div:first-child > div:first-child {
        /* The covers have a different color. */
        background: +linear-gradient(-45deg, #8c9ccc 0%, #080f40 100%);
        /* Put a border around the cover to make it cover the pages. */
        border: 2px solid #000;
        /* And center the cover. */
        margin-left: -1px;
        margin-top: -1px;
    }
    /* Back cover of the book */
    .book > div:last-child > div:last-child {
        background: +linear-gradient(-45deg, #8c9ccc 0%, #080f40 100%);
        border: 2px solid #000;
        margin-left: -1px;
        margin-top: -1px;
    }


</style>
</head>
<body>





<div class="book">
    <div> <!-- first page -->
        <div> <!-- front cover -->
            # My Fancy Book
        </div>
        <div> <!-- backside of cover -->
            # By Me I. Myself
            ## 2012 Bogus HTML Publishing Ltd
        </div>
    </div>
    <!-- content pages -->
    <div>
        <!-- front side of page -->
        <div class="book-pages"></div>
        <!-- back side of page -->
        <div class="book-pages"></div>
    </div>
    <div>
        <div class="book-pages"></div>
        <div class="book-pages"></div>
    </div>
    <div>
        <div class="book-pages"></div>
        <div class="book-pages"></div>
    </div>
</div>
<span id="book-content">
  blah blah blah ...
</span>


</body>

</html>