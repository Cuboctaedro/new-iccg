<nav class="share bot-s-dotted bot-w-2 pt-1" aria-labelledby="share-header" >

<h3 id="share-header" class="d-in-bl pr-1">Share: </h3>

<ul class="d-in-bl">

    <li class="twitter d-in-bl pr-1 w-4 h-4"><!--Twitter-->
        <a title="Tweet it" target="_blank" href="https://twitter.com/share?url={<?= $page->url() ?>&text=<?= $page->title() ?>">
            <span class="visually-hidden">Tweet it</span>
            <?php snippet('icons/twitter') ?>
        </a>
    </li>

    <li class="facebook d-in-bl pr-1 w-4 h-4"><!--Facebook-->
        <a target="_blank" title="Share it" href="http://www.facebook.com/sharer.php?u=<?= $page->url() ?>">
            <span class="visually-hidden">Share on Facebook</span>
            <?php snippet('icons/facebook') ?>
        </a>
    </li>

    <li class="linkedin d-in-bl pr-1 w-4 h-4"><!--Linkedin-->
        <a target="_blank" title="Share on LinkedIn" href="http://www.linkedin.com/shareArticle?url=<?= $page->url() ?>&title=<?= $page->title() ?>">
            <span class="visually-hidden">Share on LinkedIn</span>
            <?php snippet('icons/linkedin') ?>
        </a>
    </li>

</ul>

</nav>