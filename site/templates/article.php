<?php snippet('header') ?>
<article itemprop="mainEntity" itemscope itemtype="https://schema.org/BlogPosting" class="">

    <header class="mb-24 ml-24">
        <?php snippet('components/pagetitle') ?>
        <time itemprop="datePublished" class="heading-3 pt-12 block"><?= $page->date()->toDate('l F jS, Y') ?></time>
    </header>

    <div itemprop="description" class="pl-24 pt-24">
        <div class="generated max-w-672 pb-48">
            <?php snippet('contentblocks/index') ?>
        </div>
    </div>
</article>
<?php snippet('footer') ?>
