<?php

namespace Nima\Crud_Api;

use Illuminate\Support\ServiceProvider;


class CrudApiServiceProvider extends ServiceProvider {
  /**
   * Register services.
   *
   * @return void
   */
  public function register () {
//    $this->mergeConfigFrom (
//        __DIR__ . "/config/corud_api.php" , "crud"
//    );
  }
  
  /**
   * Bootstrap services.
   *
   * @return void
   */
  public function boot () {
    $this->loadMigrationsFrom (__DIR__ . "/database/migrations");
    $this->publishes ([
      realpath (__DIR__ . "/database/migrations") => database_path ("migrations")
    ] , 'migrations');
    
    
    $this->loadRoutesFrom (__DIR__ . "/routes/routes_api.php");
    $this->publishes ([
      __DIR__ . "/routes" => base_path ("/routes/CrudApi")
    ] , 'CrudApi');
    
    
    $this->loadViewsFrom (__DIR__ . "/views" , "CrudApi");
    $this->publishes ([
      __DIR__ . "/views" => base_path ("resources/views/Nima/CrudApi")
    ] , 'CrudApi');
    
    
    $this->publishes ([
      __DIR__ . "/config/crud.php" => config_path ("crud_api.php")
    ] , 'CrudApi');
    
    $this->publishes ([
      __DIR__ . "/database/migrations" => database_path ("/migrations")
    ] , "CrudApi");
    
    
    $this->loadTranslationsFrom (__DIR__ . "/lang/fa" , "Crud");
    $this->publishes ([
      __DIR__ . "/lang/fa" => resource_path ("lang/vendor/CrudApi")
    ] , "CrudApi");
    
    /*
    $this->loadViewComponentsAs("CrudApi" , [
        Alert::class ,
        Button::class
    ]);
    */
    
  }
}
