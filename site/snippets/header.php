<!doctype html>
<html lang="<?= $kirby->language()->code() ?>">
<head>
    <title><?= e(!$page->isHomePage(), $page->title(). ' | ' , '') ?><?= $site->title() ?></title>
    <meta name="Description" content="<?= e(!$page->isHomePage(), $page->description() , $site->description() ) ?>">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="canonical" href="<?= $page->url() ?>"/>

    <meta http-equiv="Content-Security-Policy" content="script-src 'self' use.typekit.net;">
    <meta http-equiv="Content-Security-Policy" content="style-src 'self' 'unsafe-inline' use.typekit.net;">
    <meta http-equiv="Content-Security-Policy" content="img-src 'self' p.typekit.net;">
    <meta http-equiv="Content-Security-Policy" content="connect-src performance.typekit.net;">


    <?php if($kirby->multilang()): ?>
        <?php foreach($kirby->languages() as $lang): ?>
            <link rel="alternate" hreflang="<?= $lang->code() ?>" href="<?= $page->url($lang->code()) ?>" />
        <?php endforeach; ?>
    <?php endif; ?>
    <?php snippet('meta');?>
    <link rel="stylesheet" href="https://use.typekit.net/qhv2wsy.css" >

    <link rel="stylesheet" href="<?= $kirby->url('assets') ?>/app.css">

</head>
<body itemscope itemtype="http://schema.org/WebPage" class="ff-sans c-black bg-white fs-16 lh-150">

    <p class="skip-link"><a href="#main">skip to main content</a></p>
<div class="site-wrap min-h-screen-h flex flex-row items-stretch">

    <header class="w-0 md__w-240 border-rs-solid border-r-4 flex-none" id="sidebar" style="overflow:hidden;">
        <a href="<?= $site->url() ?>" class="h-48 w-full pl-12 pr-12 pt-4 border-bottom-thick block mb-48 hover__bg-black hover__c-white">
            <span class=" heading-2">ICCG 2019</span>
        </a>
        <?php snippet('nav/single') ?>
    </header>

    <main id="main" class="flex-grow">
        <div class="w-full h-48 border-bottom-thick block md__hidden flex flex-row justify-between mb-24">
            <a href="<?= $site->url() ?>" class="min-h-48 min-w-144 site-logo block ">
            </a>
            <button class="flex flex-row block pl-24 pr-24 pb-12 pt-12" data-toggle-sidebar="#sidebar" id="menutoggle">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M0 0h24v24H0z" fill="none"/><path d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z"/></svg>
                <span class="pl-8 tt-upper">Menu</span>
            </button>
        </div>
        <?php if(!$page->isHomePage()): ?>
        <nav class="breadcrumbs w-full pl-24 pr-24 tt-upper h-48 pb-12 pt-12 border-bottom-thick mb-24 hidden md__block">
            <ol itemprop="breadcrumb" itemscope itemtype="http://schema.org/BreadcrumbList" >
                <?php
                $c = 1;
                foreach($site->breadcrumb() as $crumb):
                ?>
                <li class="inline-block" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                    <a href="<?= $crumb->url() ?>" itemprop="item" class="hover__c-red">
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
        <?php endif; ?>
