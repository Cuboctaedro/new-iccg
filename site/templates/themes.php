<?php snippet('header') ?>
<article class="">

    <?php snippet('components/pageheader') ?>

    <div class="gutters-main pb-48 border-top-thin pt-24">
        <div class="generated max-w-672 ">
            <?php snippet('contentblocks/index') ?>

        </div>
    </div>

    <section class="border-bottom-thin mb-24">
        <h2 class="heading-2 gutters-main gutters-vertical">Conference Sub-themes:</h2>
        <?php foreach($page->children() as $child): ?>
            <header class="border-top-thin gutters-main pt-12 pb-12 subject__header pointer <?= $child->subject() ?> flex flex-row" data-toggle-panel="#id<?= $child->slug() ?>">
                <?php snippet('components/subjectnumber', ['subject' => $child->subject()]); ?>
                <h3 class="heading-3 pl-12"><?= $child->title() ?></h3>
            </header>
            <div id="id<?= $child->slug() ?>" class="hidden gutters-main gutters-vertical border-top-white bg-<?= $child->subject() ?>-light">
                <div class="generated max-w-672">
                    <?php
                    if($child->contentblocks()->exists() && $child->contentblocks()->isNotEmpty()) {
                        snippet('contentblocks/index', array('page' => $child));
                    } else {
                        echo $child->text()->kt();
                    }?>
                </div>
            </div>
        <?php endforeach ;?>
    </section>


</article>
<?php snippet('footer') ?>
