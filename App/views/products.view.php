<?php loadPartial("header-alt"); ?>
<body>
    <main id="products">
        <section class="products-container">
            <div class="container">
                <div class="accordion">
                    <?php foreach ($beverages as $drink): ?>
                    <div class="accordion-item">
                        <button id="<?= strtolower(splitString($drink->name)) ?>-btn"><?= $drink->name ?></button>
                        <div id="<?= strtolower(splitString($drink->name)) ?>-content" class="accordion-content">
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
                <div class="display-area">
                    <?php foreach ($beverages as $drink): ?>
                    <?php  
                        $packaging;
                        switch ($drink->type) {
                            case "ale":
                                $packaging = "per 6-pack";
                                break;
                            case "mead":
                                $packaging = "per 750ml bottle";
                                break;
                            default:
                                $packaging = "per 6-pack";
                        }
                    ?>
                    <div id="<?= strtolower(splitString($drink->name)) ?>-info" class="beverage-info">
                        <h2><?= $drink->name ?></h2>
                        <p>
                            <?= $drink->description ?>
                        </p>
                        <h3>Tasting Notes</h3>
                        <p>
                            <?= $drink->tasting_notes ?>
                        </p>
                        <h3>Pairing Suggestions</h3>
                        <p>
                            <?= $drink->pairing_suggestions ?>
                        </p>
                        <img src="/images/<?= $drink->image ?>" alt="<?= $drink->name ?>">
                        <h3>Price</h3>
                        <p><?= $drink->name ?> is available for <strong><?= formatPrice($drink->price) ?> <?= $packaging ?></strong>.</p>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
    </main>
    <?php if (!empty($script)) : ?>
        <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
        <script type="module" src="/js/<?= $script ?>.js"></script>
    <?php endif; ?>
    <?php loadPartial("footer"); ?>