
<nav>
    <ul class="border-bottom-thin">
    <?php foreach($pages->listed() as $item): ?>
        <li>
            <a class="border-top-thin menu__link <?php e($item->isOpen(), ' is-active ') ?>" href="<?= $item->url() ?>"><?= $item->title() ?></a>
        </li>
    <?php endforeach ?>
    </ul>
</nav>
