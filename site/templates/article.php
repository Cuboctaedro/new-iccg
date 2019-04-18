<?php snippet('header') ?>
<article itemprop="mainEntity" itemscope itemtype="https://schema.org/BlogPosting" class="">

    <header class="mb-24 gutters-main">
        <?php snippet('components/pagetitle') ?>
        <time itemprop="datePublished" class="ff-serif fs-italic pt-12 block"><?= $page->date()->toDate('l F jS, Y') ?></time>
    </header>

    <div itemprop="description" class="gutters-main pt-24 border-top-thin">
        <div class="generated max-w-672 pb-48">
            <?php snippet('contentblocks/index') ?>
        </div>
    </div>
</article>
<?php snippet('footer') ?>
