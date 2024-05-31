<?php loadPartial("header"); ?>
<body>
    <main>
        <!-- Tablet and Desktop Banner -->
        <section id="productsBanner" class="products-banner blue-background d-tablet">
            <div class="row">
                <div class="product product-left">
                    <img id="berserker" class="product-img" src="/images/berserker.png" alt=""/>
                </div>
                <div class="product product-top">
                    <img id="vikingr" class="product-img" src="/images/vikingr-brew.png" alt=""/>
                </div>
                <div class="product product-right">
                    <img id="valkyra" class="product-img" src="/images/valkyra.png" alt=""/>
                </div>
            </div>
            <div class="row row-text">
                <h2 class="header br">berserker</h2>
                <h2 class="header vk">vikingr</h2>
                <h2 class="header vy">valkyra</h2>
            </div>
            <div class="streak"></div>
        </section>
        <!-- Mobile Carousel -->
        <section id="productsCarousel" class="products-banner blue-background d-mobile">
            <div class="carousel">
                <div class="carousel-container">
                    <div class="carousel-item red-background">
                        <img class="product-img" src="/images/berserker.png" alt=""/>
                    </div>
                    <div class="carousel-item black-background">
                        <img class="product-img" src="/images/vikingr-brew.png" alt=""/>
                    </div>
                    <div class="carousel-item gold-background">
                        <img class="product-img" src="/images/valkyra.png" alt=""/>
                    </div>
                </div>
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
        <section class="search">
            <div class="row">
                <div class="search-box search-box_form">
                    <h2 class="search-box_form-greeting">Find Nordic at a store near you!</h2>
                    <form class="search-form" action="#" method="post">
                        <div class="search-form_group">
                            <span class="search-form_group-zip"><p>zip:</p></span>
                            <input type="text" class="search-form_group-search" placeholder="00000...">
                            <button class="search-form_group-button"><i class="fa fa-search"></i></button>
                        </div>
                    </form>
                    <img class="map-container" src="./images/map.png" alt="map">
                </div>
                <div class="search-box search-box_results">
                    <div class="container">
                        <div class="result">
                            <p class="label">Business name</p>
                            <p class="address">123 Main street</p>
                            <p class="distance">50 miles</p>
                        </div>
                        <div class="result">
                            <p class="label">Business name</p>
                            <p class="address">123 Main street</p>
                            <p class="distance">50 miles</p>
                        </div>
                        <div class="result">
                            <p class="label">Business name</p>
                            <p class="address">123 Main street</p>
                            <p class="distance">50 miles</p>
                        </div>
                        <div class="result">
                            <p class="label">Business name</p>
                            <p class="address">123 Main street</p>
                            <p class="distance">50 miles</p>
                        </div>
                        <div class="result">
                            <p class="label">Business name</p>
                            <p class="address">123 Main street</p>
                            <p class="distance">50 miles</p>
                        </div>
                        <div class="result">
                            <p class="label">Business name</p>
                            <p class="address">123 Main street</p>
                            <p class="distance">50 miles</p>
                        </div>
                        <div class="result">
                            <p class="label">Business name</p>
                            <p class="address">123 Main street</p>
                            <p class="distance">50 miles</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="promotion">
            <div class="promo-container">
                <a href="/">
                    <h2 class="promo-container-text">enter to win</br></h2>
                    <span class="promo-container-text promo-container-text-sub">viking invasion contest</span>
                </a>
            </div>
        </section>
    </main>
    <?php loadPartial("footer"); ?>