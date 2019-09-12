<?php

namespace App\Providers;

use App\Models\Category;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('site.partials.nav', function ($view) {
            $view->with('categories', Category::orderByRaw('-name ASC')->get()->nest());
        });
    }
}

//    /**
//     * Register services.
//     *
//     * @return void
//     */
//    public function register()
//    {
//        //
//    }
//
//    /**
//     * Bootstrap services.
//     *
//     * @return void
//     */
//    public function boot()
//    {
//        $this->composerCategories();
//    }
//
//    private function composerCategories()
//    {
//        view()->composer('site.partials.nav', function($view) {
//            $view->with('categories', Category::orderBy('name', 'ASC')->get()); //whats nest??
//        });
//    }
