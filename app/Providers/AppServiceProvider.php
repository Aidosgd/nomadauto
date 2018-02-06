<?php

namespace App\Providers;

use Ibec\Content\Post;
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

        $footer = Post::whereHas('nodes', function($q){
            $q->where('slug', 'footer');
        })->first();

        $view->composer(['*'], function($view) use($main_menu, $footer){
    			$view->with(compact('main_menu', 'footer'));
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
