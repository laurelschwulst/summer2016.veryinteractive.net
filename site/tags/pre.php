<?php

kirbytext::$tags['pre'] = array(
  'html' => function($tag) {
    return '<pre>' . $tag->attr('pre') . '</pre>';
  }
);

?>