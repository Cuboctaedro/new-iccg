<section class="border-bottom-thin mb-24">
    <?php foreach($subpages as $child): ?>
        <header class="border-top-thin p-12 subject__header pointer <?= $child->subject() ?> flex flex-row" data-toggle-panel="#id<?= $child->slug() ?>">
            <?php snippet('components/subjectnumber', ['subject' => $child->subject()]); ?>
            <h3 class="heading-3 pl-12"><?= $child->title() ?></h3>
        </header>
        <div id="id<?= $child->slug() ?>" class="hidden pl-12 pr-12 pt-12 pb-24 border-top-white bg-<?= $child->subject() ?>-light">
            <?php
            if($child->contentblocks()->exists() && $child->contentblocks()->isNotEmpty()) {
                snippet('contentblocks/index', array('page' => $child));
            } else {
                echo $child->text()->kt();
            }?>
        </div>
    <?php endforeach ;?>
</section>
