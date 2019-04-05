<?php snippet('header') ?>
<section>

    <?php snippet('components/pageheader') ?>

    <ul itemprop="mainEntity" itemscope itemtype="https://schema.org/Blog" class="border-bottom-thin">
        <?php foreach( $articles as $item ): ?>
        <?php snippet('card', array('item' => $item)) ?>
        <?php endforeach ; ?>
    </ul>
 </section>
 <?php snippet('footer') ?>
