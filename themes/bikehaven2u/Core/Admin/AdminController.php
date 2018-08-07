<?php

namespace BikeHaven\Admin;

use Fresa\Admin\Columns;
use BikeHaven\PostTypes\Service;

class AdminController {
  public function __construct()
  {
    if ( is_admin() ) {
      $this->services();
    }
  }

  protected function services()
  {
    Columns::for(Service::class)
      ->column('service_price', [
        'label' => 'Price',
        'value' => function( $service ) {
          return '$' . $service->service_price . '.00';
        }
      ])
      ->hide('date')
      ->register();
  }
}