<li class="hoverblock  border-top-thin">
    <a href="<?= $item->url() ?>" class="block animate gutters-main gutters-vertical hover__bg-grey-light" name="<?= $item->title() ?>">
        <article itemprop="blogPost" itemscope itemtype="https://schema.org/BlogPosting">
            <header class="mb-12">
                <h2 itemprop="headline" class="heading-2 mb-12"><?= $item->title() ?></h2>
                <time itemprop="datePublished" class="ff-serif fs-italic"><?= $item->date()->toDate('l F jS, Y') ?></time>
            </header>
            <div class="ff-serif max-w-672"><?= $item->summary() ?></div>
        </article>
    </a>
</li>
