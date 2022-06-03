<?php

  require 'controllers/demo.php';

  use Slime\render;

  $app->get('/', function ($req, $res, $args) {

    return render::hbs($req, $res, [
      'template' => 'index',
      'title' => $GLOBALS['site_title'],
    ]);

  });

?>