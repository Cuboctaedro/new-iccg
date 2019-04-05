<?php


return function($site, $pages, $page) {

// fetch the basic set of pages
$articles = $page->children()->sortBy('date', 'desc');


// apply pagination
$articles   = $articles->paginate(10);
$pagination = $articles->pagination();


return compact('articles', 'pagination');

};
