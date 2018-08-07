<?php

namespace BikeHaven\Inc;
use BikeHaven\Inc\Menu;

class PageBuilder {
  public function __construct() {
    new Menu();
  }

  public static function head()
  {
    return wp_head();
  }

  public static function nav_menu( string $name )
  {
    Menu::render( $name );
  }

  public static function footer()
  {
    return wp_footer();
  }
}