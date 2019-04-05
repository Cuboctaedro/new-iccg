<?php snippet('header') ?>
<article itemprop="mainEntity" itemscope itemtype="https://schema.org/Event" class="p-24">

    <header class="mb-24 bg-black c-white pl-8 pr-8 pt-2 pb-4">
        <h1 itemprop="name" class="heading-4 tt-upper">FT<?= $page->number() ?>: <?= $page->title() ?></h1>
    </header>

    <div class="flex flex-wrap">
        <div itemprop="about" class="w-full lg__w-2-3 xl__w-1-2 lg__pr-12">

            <h2 class="heading-2 mb-24"><?= $page->heading() ?></h2>
            <div class="generated max-w-672"><?= $page->text()->kt() ?></div>
            <div class="pt-24 pb-24">
                <a href="https://docs.google.com/forms/d/e/1FAIpQLSc0-Qt37nVsbnY6K3v4gwp43HLq6Xid0B2nRFfAmesnGwJ-iQ/viewform" rel="noopener noreferrer" class="button" target="_blank" >Field Trip Registration</a>
            </div>

        </div>

        <aside class="w-full lg__w-1-3 xl__w-1-2 lg__pl-12">

            <time itemprop="doorTime" class="heading-3 block mb-16"><?= $page->date()->toDate('l F jS, Y') ?></time>

            <div class="mb-24">
                <span class="tt-upper block">Participants:</span>
                <span class="ff-serif block mb-24"><?= $page->participants() ?></span>
                <?php if( $page->startingpoint()->exists() && $page->startingpoint()->isNotEmpty() ):?>
                <span class="tt-upper block">Starting Point:</span>
                <span class="ff-serif block mb-24"><?= $page->startingpoint() ?></span>
                <?php endif; ?>
                <span class="tt-upper block">Place of Discussion:</span>
                <span class="ff-serif block mb-24"><?= $page->location() ?></span>
                <?php if( $page->guides()->exists() && $page->guides()->isNotEmpty() ):?>
                <span class="tt-upper block">Field Trip Guides:</span>
                <span class="ff-serif block mb-24"><?= $page->guides() ?></span>
                <?php endif; ?>
            </div>
            <div class="mb-24">
                <?php if($page->map()->isNotEmpty()):?>
                <img src="<?= $page->map()->toFile()->url() ?>" class="w-full d-block" />
                <?php endif ; ?>
            </div>
            <div class="mb-24">
            <?php if($page->picture()->isNotEmpty()):?>
                <img src="<?= $page->picture()->toFile()->url() ?>" class="w-full d-block" />
                <?php endif ; ?>
            </div>

        </aside>
    </div>
</article>
<?php snippet('footer') ?>
