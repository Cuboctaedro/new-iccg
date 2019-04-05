<?php snippet('header') ?>
<article class="single md__p-3">
    <header class="p-3">
        <h1 itemprop="name" class="fs-36 md__fs-48 lh-5 md__lh-6 fw-700 mb-3"><?= $page->title()->html() ?></h1>
    </header>
    <div class="p-3 content w-full lg__w-2of3 xl__w-1of2">
    <?= $page->text()->kt(); ?>
    <section>
    <h2>Conference Sub-themes:</h2>
    <?php foreach($page->children() as $child): ?>
    <h3 class="ff-sans fw-900 fs-18 lh-3 mb-1"><?= $child->title() ?></h3>
    <?= $child->text()->kt() ?>
    <?php endforeach ;?>
    </section>
    <?= $page->endtext()->kt(); ?>
    
    </div>
    <?php snippet('submit-buttons') ?>
</article>
<?php snippet('footer') ?>
