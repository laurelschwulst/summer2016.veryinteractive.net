<?php

kirbytext::$tags['code-heading'] = array(
  'html' => function($tag) {
    return '<h2 class="code-heading">' . $tag->attr('code-heading') . '</h2>';
  }
);

?>