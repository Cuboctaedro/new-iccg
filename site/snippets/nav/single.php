
<nav>
    <ul class="border-bottom-thin">
    <?php foreach($pages->listed() as $item): ?>
        <li>
            <a class="border-top-thin menu__link <?php e($item->isOpen(), ' is-active ') ?>" href="<?= $item->url() ?>"><?= $item->title() ?></a>
        </li>
    <?php endforeach ?>
        <li class="pt-48 border-top-thin">
            <a class="border-top-thin menu__link " href="https://www.facebook.com/events/307182586635857/" target="_blank">Facebook</a>
        </li>

    </ul>
</nav>
