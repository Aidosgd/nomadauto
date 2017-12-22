<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Ibec\Menu\Database\Menu;
use Illuminate\View\Factory;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(Factory $view)
    {
        $menu = Menu::with('children')->find(1);

        $main_menu = $menu
            ->descendants()
            ->with('linkable')
            ->get()
            ->toHierarchy();

        $view->composer(['parts.header'], function($view) use($main_menu){
    			$view->with(compact('main_menu'));
    		});

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
