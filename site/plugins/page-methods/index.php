<?php

Kirby::plugin('iccg/page-methods', [
    'pageMethods' => [
        'summary' => function () {
            foreach ($this->contentblocks()->toStructure() as $section) {
                if ($section->_key() == 'text') {
                    return $section->text()->excerpt(180);
                    break;
                }
            }
        }
    ]
]);
