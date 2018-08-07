<?php
use BikeHaven\Inc\PageBuilder;
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link href="https://fonts.googleapis.com/css?family=Kadwa|Nunito" rel="stylesheet">
  <? PageBuilder::head() ?>
</head>
<body>
  <? PageBuilder::nav_menu( 'primary' ) ?>

  <div id="app">
    @yield('content')
  </div>

  <? PageBuilder::footer() ?>
</body>
</html>