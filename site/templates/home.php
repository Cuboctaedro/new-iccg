<?php snippet('header') ?>
<section class="">
    <div class="p-24">
        <img src="<?= $site->logo()->toFile()->url() ?>" class="d-block max-w-full"/>
    </div>
    <div class="p-24">
        <p class="visually-hidden">
            8th International Conference of Critical Geography 2019<br/>
        </p>
        <p class="visually-hidden">
        <?= $site->congresstitle() ?>
        </p>
        <div class="heading-2 pt-24 pb-12">Athens, Greece</div>
        <div class="heading-2 pb-24"><?= $site->congressdates() ?></div>
    </div>
</section>
<?php if($page->text()->isNotEmpty()): ?>
<section class="p-24 border-bottom-thin">
    <div class="generated max-w-672">
        <?= $page->text()->kt(); ?>
    </div>
</section>
<?php endif; ?>
<section>
    <header class="visually-hidden">
        <h2><?= $pages->find('blog')->title() ?></h2>
    </header>
    <ul>
    <?php foreach($pages->find('blog')->children()->sortBy('date', 'desc')->limit('9') as $item) : ?>
    <?php snippet('card', array('item' => $item)) ?>
    <?php endforeach ; ?>
    </ul>
</section>
<?php snippet('footer') ?>
