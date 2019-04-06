<?php if($kirby->user()): ?>
<?php snippet('header') ?>
<article class="">

    <?php snippet('components/pageheader') ?>

    <div class="pb-48 border-top-thin">
        <?php foreach($dates as $date => $timeslots): ?>
            <section class="mb-48 border-bottom-grey">
                <header class="gutters-main gutters-vertical">
                    <h2 class="heading-2"><?= $timeslots->first()->date()->toDate('l, F j') ?></h2>
                </header>
                <?php foreach($timeslots as $timeslot): ?>
                        <div class="border-top-grey accordion__header " data-toggle-panel="#id<?= $timeslot->slug() ?>">
                            <h3 class="heading-3 gutters-main pt-12 pb-12"><?= $timeslot->start() ?> - <?= $timeslot->end() ?></h3>
                        </div>
                        <div class="hidden" id="id<?= $timeslot->slug() ?>">
                            <?php foreach($timeslot->children() as $event): ?>

                                <div class="border-top-grey gutters-main pt-12 pb-12 subject__header <?= $event->subject() ?> flex flex-row <?= e($event->hasContent(), ' pointer ')?>" <?php if ($event->hasContent()): ?> data-toggle-panel="#id<?= $event->slug() ?>" <?php endif; ?>>
                                    <div class="w-1-4 flex flex-row">
                                        <?php if($event->hasSubject()): ?>
                                            <?php snippet('components/subjectnumber', ['subject' => $event->subject()]); ?>
                                        <?php else: ?>
                                            <div class="w-24 h-24"></div>
                                        <?php endif; ?>
                                        <div class="pl-12"><?= $event->room() ?></div>
                                    </div>
                                    <h4 class="heading-4 w-3-4"><?= $event->title() ?></h4>
                                </div>
                                <div class="hidden gutters-main pt-12 pb-12 ff-serif bg-<?= $event->subject() ?>-light " id="id<?= $event->slug() ?>">
                                    <?php if($event->coordinators()->exists() && $event->coordinators()->isNotEmpty()): ?>
                                    <div class="flex flex-column sm__flex-row pt-8 pb-8 border-bottom-dot">
                                        <div class="sm__w-1-4 pr-16 sm__ta-right ff-sans">Coordinators:</div>
                                        <div class="generated sm__w-3-4 "><?= $event->coordinators() ?></div>
                                    </div>
                                    <?php endif;?>

                                    <?php if($event->presentations()->exists() && $event->presentations()->isNotEmpty()): ?>
                                        <ul class="children-border-bottom-dot">
                                            <?php foreach($event->presentations()->toStructure() as $presentation): ?>
                                                <li class="presentation pt-8 pb-8 flex flex-column sm__flex-row generated">
                                                    <div class="sm__w-1-4 pr-16 sm__ta-right" >
                                                        <em><?= $presentation->speaker() ?></em>
                                                    </div>
                                                    <div class="sm__w-3-4"><?= $presentation->title() ?></div>
                                                </li>
                                            <?php endforeach ?>
                                        </ul>
                                    <?php endif;?>

                                    <?php if($event->contentblocks()->exists() && $event->contentblocks()->isNotEmpty()): ?>
                                        <div class="sm__w-3-4 sm__ml-1-4 pt-8 pb-8">
                                            <?php foreach ($event->contentblocks()->toStructure() as $section): ?>
                                                <?php if ($section->_key() == 'text') : ?>
                                                <div class="generated mb-24 max-w-672">
                                                    <?= $section->text()->kt() ?>
                                                </div>
                                                <?php endif;?>
                                                <?php if ($section->_key() == 'image') :?>
                                                    <?php if ($section->picture()->isNotEmpty()): ?>
                                                    <figure class="w-480 mr-24 mb-24">
                                                        <img src="<?= $event->image($section->picture())->url(); ?>" class="block max-w-full"/>
                                                        <figcaption class="fs-italic fs-14">
                                                            <?= $section->caption() ?>
                                                        </figcaption>
                                                    </figure>
                                                    <?php endif; ?>
                                                <?php endif;?>
                                            <?php endforeach; ?>
                                        </div>
                                    <?php endif;?>

                                </div>
                            <?php endforeach; ?>
                        </div>

                <?php endforeach; ?>

            </section>
        <?php endforeach ?>
    </div>

</article>

<?php snippet('footer') ?>
<?php else :
    go('');
endif; ?>
