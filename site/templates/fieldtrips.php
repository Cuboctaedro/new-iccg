<?php snippet('header') ?>
<section>

    <?php snippet('components/pageheader') ?>

    <div class="gutters-main gutters-vertical border-bottom-thick">
        <a href="https://docs.google.com/forms/d/e/1FAIpQLSc0-Qt37nVsbnY6K3v4gwp43HLq6Xid0B2nRFfAmesnGwJ-iQ/viewform" rel="noopener noreferrer" class="button" target="_blank" >Field Trip Registration</a>
    </div>
    <ul itemprop="mainEntity" itemscope itemtype="https://schema.org/ItemList">
    <?php foreach($page->children()->sortBy('number', 'asc') as $child): ?>
        <li class="border-bottom-thin">
            <a href="<?= $child->url() ?>" class="gutters-main gutters-vertical block hover__bg-grey-light" name="<?= $child->heading() ?>">
                <article itemprop="itemListElement" itemscope itemtype="https://schema.org/Event">

                    <header class="mb-24 bg-black c-white pl-8 pr-8 pt-4 pb-2">
                        <h2 itemprop="name" class="ff-sans ls-loose tt-upper">FT<?= $child->number() ?>: <?= $child->title() ?></h2>
                    </header>

                    <div class="flex flex-row flex-wrap">
                        <div itemprop="about" class="w-full lg__w-2-3 xl__w-1-2 lg__pr-12">
                            <h3 class="heading-2 mb-24">
                            <?= $child->heading() ?>
                            </h3>
                            <div class="generated max-w-672"><?= $child->text()->excerpt(200) ?></div>
                        </div>
                        <aside class="w-full lg__w-1-3 xl__w-1-2 lg__pl-12">
                            <time itemprop="doorTime" class="heading-3 block mb-16"><?= $child->date()->toDate('l F jS, Y') ?></time>
                            <div>
                                <?php if( $child->startingpoint()->exists() && $child->startingpoint()->isNotEmpty() ):?>
                                <span class="tt-upper block">Starting Point:</span>
                                <span class="ff-serif block mb-24"><?= $child->startingpoint() ?></span>
                                <?php endif; ?>
                                <span class="tt-upper block">Participants:</span>
                                <span class="ff-serif block mb-24"><?= $child->participants() ?></span>
                                <span class="tt-upper block">Place of Discussion:</span>
                                <span class="ff-serif block mb-24"><?= $child->location() ?></span>
                            </div>
                        </aside>
                    </div>

                </article>
            </a>
        </li>
    <?php endforeach ;?>
    </ul>
</section>
<?php snippet('footer') ?>
