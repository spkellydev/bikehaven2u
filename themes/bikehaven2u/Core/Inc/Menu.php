<?php

namespace BikeHaven\Inc;
use BikeHaven\Inc\BootstrapNavWalker;

class Menu extends BootstrapNavWalker {
  public function __construct()
  {
    add_action( 'after_setup_theme', [$this, 'register_nav_menu'] );
  }

  function register_nav_menu() 
  {
    register_nav_menu( 'primary', 'Header Navigation Menu' );
  }

  public static function render(string $name)
  {
    ?>

    <nav class="navbar navbar-expand-md fixed-top py-2">
      <a class="navbar-brand" href="#">Bike Haven 2U</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs4navbar" aria-controls="bs4navbar" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <?php
      wp_nav_menu([
        'menu'            => $name,
        'theme_location'  => $name,
        'container'       => 'div',
        'container_id'    => $name. '-menu',
        'container_class' => 'collapse navbar-collapse',
        'menu_id'         => false,
        'menu_class'      => 'navbar-nav mr-auto',
        'depth'           => 2,
        'fallback_cb'     => 'Menu::fallback',
        'walker'          => new Menu()
      ]);
      ?>
    </nav>

    <?php
  }
}
