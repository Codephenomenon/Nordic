<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="description" content="Website for portfolio campaign">
<meta name="author" content="Daniel Clayton">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
<script src="js/function.js"></script>
</head>
<?php include('template/header.php') ?>
    <main>
        <section id="productsBanner" class="products-banner blue-background">
            <div class="row">
            <div class="product product-left">
                <img id="berserker" class="product-img" src="images/berserker.png" alt=""/>
            </div>
            <div class="product product-top">
                <img id="vikingr" class="product-img" src="images/vikingr-brew.png" alt=""/>
            </div>
            <div class="product product-right">
                <img id="valkyra" class="product-img" src="images/valkyra.png" alt=""/>
            </div>
            </div>
            <div class="row row-text">
            <h2 class="header">berserker</h2>
            <h2 class="header">vikingr</h2>
            <h2 class="header">valkyra</h2>
            </div>
            <div class="streak"></div>
        </section>

        <section class="hero">
            <div class="video">
            <video class="background-video" autoplay muted loop>
                <source src="images/video.mp4" type="video/mp4">
                <source src="images/video.webm" type="video/webm">
                Your browser is not supported!
            </video>
            <div id="shield" class="side-image"></div>
            <div class="side-content">
                <h1 class="side-content-header">Why choose Nordic Ale?</h1>
                <p class="side-content-text">For those who claim the spirit of adventure, there is no other ale for you. Be wary, Nordic ale is not for the faint of heart, and offers the culmination of honeyed spices and rich flavor. Each bottle of our finest ales will take you on a long journey north, back to a time when man braved the sea in search of new lands. </p>
                <p class="side-content-text">Brewed in the heart of Denmark, Nordic boasts a strong tradition of crafting the finest meads and ales for a thousand leagues. Find Nordic ale at the purveyor of quality beverages nearest to <a href="#">you!</a></p>
            </div>
            </div>
        </section>
    </main>
    <?php include('template/footer.php') ?>
</body>