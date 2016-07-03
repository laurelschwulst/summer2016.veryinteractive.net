<?php
kirbytext::$tags['centered'] = array(
  'attr' => array(
    'title'
  ),
  'html' => function($tag) {
    switch ($tag->attr('centered')) {
      case 'open':
        $markup = '<section class="centered">';
        $markup .= '<div class="centered" markdown="1">';
        break;
      case 'close':
        $markup  = '</div></section>';
        break;
    }
    return $markup;
  }
);