<?php

namespace Skriptoff\Posts\Providers;

use Illuminate\Support\ServiceProvider;
use Skriptoff\Posts\Console\Commands\PostCommand;

class PostsServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/../routes/posts.php');
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'posts');

        $this->publishes([
            __DIR__.'/../resources/views' => resource_path('views/vendor/posts'),
        ]);

        $this->publishes([
            __DIR__.'/../config/posts.php' => config_path('posts.php'),
        ]);

        if ($this->app->runningInConsole()) {
            $this->commands([
                PostCommand::class,
            ]);
        }
    }
}
