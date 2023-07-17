<?php

namespace Andresgarzonj\Baserepo;

use Illuminate\Support\ServiceProvider;
use Andresgarzonj\Baserepo\Test\Models\User;

class BaseRepositoryProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
    }
    
    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(BaseRepository::class, function () {
            return new BaseRepository(new User());
        });

        $this->app->alias(BaseRepository::class, 'baserepository');
    }
}