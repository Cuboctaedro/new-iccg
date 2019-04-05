<?php
foreach ($page->contentblocks()->toStructure() as $section) {
    if ($section->_key() == 'text') {
        snippet('contentblocks/text', array('data'=> $section));
    }
    if ($section->_key() == 'image') {
        snippet('contentblocks/image', array('data'=> $section));
    }
}
?>
