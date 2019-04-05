<?php

Kirby::plugin('iccg/kirbytags', [
    'tags' => [
        'pagelist' => [
            'html' => function($tag) {
                if ( $tag->attr('pagelist') == 'themes' ) {
                    $parent = site()->pages()->find('themes');
                    $html = snippet('subthemes', array('subpages' => $parent->children()), true);
                    return $html;
                } else {
                    $parent = $tag->parent();
                    $html = snippet('subpages', array('subpages' => $parent->children()), true);
                    return $html;
                }

            }
        ],
        'formlink' => [
            'html' => function($tag) {
                if ( $tag->attr('formlink') == 'panel' ) {
                    return '<a class="buttonlink" href=" ' . site()->panelform() . ' " target="_blank">Submit Panel</a> ';
                } elseif ( $tag->attr('formlink') == 'abstract' ) {
                    return ' <a class="buttonlink" href=" ' . site()->abstractform() . ' " target="_blank">Submit Abstract</a> ';
                }

            }
        ]
    ]
]);
