<?php

namespace App\Http\Applications\Providers;

use Illuminate\Support\ServiceProvider;

//Llamada a mi modelo
use App\Http\Domain\Entities\Post;

//Llamada a mi repositorio
use App\Http\Infrastructure\Repositories\PostRepository as Repository;

class AppService extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('App\Http\Domain\Contracts\IPost', function(){
            return new Repository(new Post);
        });
    }
}
