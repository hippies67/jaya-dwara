<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Web;

class ContentServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public $web;
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
        $this->web = Web::first();

        view()->composer('layouts.front', function($view) {
            $view->with(['web_' => $this->web]);
        });

        view()->composer('layouts.main', function($view) {
            $view->with(['web_' => $this->web]);
        });
    }
}
