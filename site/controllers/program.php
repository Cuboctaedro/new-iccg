<?php

return function ($page) {


    $dates = $page->children()->groupBy('date');




  // pass $articles and $pagination to the template
  return [
    'dates' => $dates
  ];

};
