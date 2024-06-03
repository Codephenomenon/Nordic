<?php loadPartial("header-alt"); ?>
<body>
    <main>
        <section class="error">
            <h1><?= $status ?></h1>
            <p class="large"><?= $message ?></p>
            <p class="large">Return <a class="link" href="/">Home</a></p>
        </section>
    </main>
    <?php loadPartial("footer"); ?>