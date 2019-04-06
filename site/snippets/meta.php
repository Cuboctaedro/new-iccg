<meta property="og:title" content="<?= $page->title()?>" />
<meta property="og:description" content="<?= $page->description()?>" />
<meta property="og:url" content="<?= $page->url()?>" />
<?php if($page->featuredimage()->isNotEmpty()): ?>
    <meta property="og:image" content="<? $page->featuredimage()->toFile()->thumb([
        'width'   => 1200,
        'height'  => 630,
        'crop'    => true
    ])->url() ?>" />
<?php endif; ?>

<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="<? $site->sitetwitter() ?>">
<meta name="twitter:creator" content="<? $page->authortwitter() ?>">
<meta name="twitter:title" content="<? $page->title() ?>">
<meta name="twitter:description" content="<?= $page->description()?>">
<?php if($page->featuredimage()->isNotEmpty()): ?>
    <meta name="twitter:image" content="<? $page->featuredimage()->toFile()->thumb([
        'width'   => 1200,
        'height'  => 630,
        'crop'    => true
    ])->url() ?>" />
<?php endif; ?>

<script type="application/ld+json">
{
    "@context": "http://schema.org",
    "@type": "WebPage",
    "name": "<? $page->title() ?>",
    "description": "<?= $page->description()?>",
    "publisher": {
        "name": "<? $site->title() ?>"
    }
    <?php if($page->featuredimage()->isNotEmpty()): ?>
    ,
    "image": "<? $page->featuredimage()->toFile()->thumb(['width'=> 1200,'height'=> 630,'crop'=> true])->url() ?>"
    <?php endif; ?>
}
</script>
<link rel="apple-touch-icon" sizes="57x57" href="<?= $kirby->url('assets') ?>/icons/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="<?= $kirby->url('assets') ?>/icons/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="<?= $kirby->url('assets') ?>/icons/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="<?= $kirby->url('assets') ?>/icons/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="<?= $kirby->url('assets') ?>/icons/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="<?= $kirby->url('assets') ?>/icons/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="<?= $kirby->url('assets') ?>/icons/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="<?= $kirby->url('assets') ?>/icons/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="<?= $kirby->url('assets') ?>/icons/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="<?= $kirby->url('assets') ?>/icons/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="<?= $kirby->url('assets') ?>/icons/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="<?= $kirby->url('assets') ?>/icons/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="<?= $kirby->url('assets') ?>/icons/favicon-16x16.png">
