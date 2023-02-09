<?php

namespace App\Providers;

use App\Http\ViewComposers\BodyStyleViewComposer;
use App\Http\ViewComposers\SearchViewComposer;
use Illuminate\Support\ServiceProvider;
use View;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot()
    {
        View::composer('livewire.index-search', SearchViewComposer::class);
        View::composer('index', BodyStyleViewComposer::class);
    }
}
