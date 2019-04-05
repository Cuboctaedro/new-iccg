<?php
$menupages = $site->pages()->visible();
?>

<nav role="navigation" aria-label="Main navigation" id="nav" class="mt-2">
    <ul id="menulist">
        <?php foreach ($menupages as $item):?>
            <li>
                <a href="<?= $item->url() ; ?>" class="pl-2 pr-2 c-white h__c-red d-block animate mb-2">
                    <span><?= $item->title() ; ?></span>
                </a>
            </li>
        <?php endforeach; ?>
            <li>
                <a href="https://www.facebook.com/events/307182586635857/" class="pl-2 pr-2 c-white h__c-red d-block animate mt-6" target="_blank">
                    <span>Facebook</span>
                </a>
            </li>
    </ul>
</nav>
