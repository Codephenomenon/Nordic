<?php loadPartial("header"); ?>
<!-- Load Google Maps API key -->
<?php if (!empty($key)) : ?>
    <script>
        (g=>{var h,a,k,p="The Google Maps JavaScript API",c="google",l="importLibrary",q="__ib__",m=document,b=window;b=b[c]||(b[c]={});var d=b.maps||(b.maps={}),r=new Set,e=new URLSearchParams,u=()=>h||(h=new Promise(async(f,n)=>{await (a=m.createElement("script"));e.set("libraries",[...r]+"");for(k in g)e.set(k.replace(/[A-Z]/g,t=>"_"+t[0].toLowerCase()),g[k]);e.set("callback",c+".maps."+q);a.src=`https://maps.${c}apis.com/maps/api/js?`+e;d[q]=f;a.onerror=()=>h=n(Error(p+" could not load."));a.nonce=m.querySelector("script[nonce]")?.nonce||"";m.head.append(a)}));d[l]?console.warn(p+" only loads once. Ignoring:",g):d[l]=(f,...n)=>r.add(f)&&u().then(()=>d[l](f,...n))})({
            key: "<?= $key ?>",
            v: "weekly",
            // Use the 'v' parameter to indicate the version to use (weekly, beta, alpha, etc.).
            // Add other bootstrap parameters as needed, using camel case.
        });
    </script>
<?php endif; ?>
<body>
    <main id="home">
        <!-- Tablet and Desktop Banner -->
        <section id="productsBanner" class="products-banner blue-background d-tablet">
            <div class="row">
                <?php foreach ($beverages as $drink): ?>
                <div class="product">
                    <img id="<?= strtolower(splitString($drink->name)) ?>" class="product-img" src="/images/<?= $drink->image ?>" alt="<?= $drink->name ?>"/>
                </div>
                <?php endforeach; ?>
            </div>
            <div class="row row-text">
                <?php foreach ($beverages as $drink): ?>
                    <h2 class="header <?= $drink->short_form ?>"><?= splitString($drink->name) ?></h2>
                <?php endforeach; ?>
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
            <div class="streak">
                <h2 data-header="0" class="mobile-header d-block">Berserker</h2>
                <h2 data-header="1" class="mobile-header">Vikingr</h2>
                <h2 data-header="2" class="mobile-header">Valkyra</h2>
            </div>
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
                    <div class="map-container">
                        <gmp-map id="searchMap" class="map"></gmp-map>
                    </div>
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
    </main>
    <?php if (!empty($script)) : ?>
        <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
        <script type="module" src="/js/<?= $script ?>.js"></script>
    <?php endif; ?>
    <?php loadPartial("footer"); ?>