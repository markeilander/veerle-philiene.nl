<?php namespace Eilander\Storage;
 
use Illuminate\Support\ServiceProvider;

class StorageServiceProvider extends ServiceProvider {
 
    public function register()
    {
        // Cadeau
        $this->app->bind('Eilander\Repositories\Cadeau\CadeauRepository', function($app)
        {
            return new EloquentCadeauRepository( new Cadeau );
        });
        // Philiene
        $this->app->bind('Eilander\Repositories\Philiene\PhilieneRepository', function($app)
        {
            return new EloquentPhilieneRepository( new Philiene );
        });
         // Veerle
        $this->app->bind('Eilander\Repositories\Veerle\VeerleRepository', function($app)
        {
            return new EloquentVeerleRepository( new Veerle );
        });
    }
 
}