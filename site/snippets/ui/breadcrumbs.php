<nav class="breadcrumbs c-main w-full pl-6 pr-4 fs-14 tt-upper lh-3 pb-1 pt-1 bol-s-solid bol-w-1 bo-c-white bg-gray" role="navigation" aria-label="breadcrumb">
    <ol itemprop="breadcrumb" itemscope itemtype="http://schema.org/BreadcrumbList">
        <?php 
        $c = 1;
        foreach($site->breadcrumb() as $crumb): 
        ?>
        <li class="d-in-bl" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
            <a href="<?= $crumb->url() ?>" itemprop="item" class="c-main h__c-red">
                <span itemprop="name"><?= $crumb->title()->html() ?></span>
                <meta itemprop="position" content="<?= $c ?>" />
            </a>
        </li>
        <?php
        $c = $c + 1; 
        endforeach; 
        ?>
    </ol>
</nav>