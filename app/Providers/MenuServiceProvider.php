<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Spatie\Menu\Laravel\Link;

class MenuServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        Link::macro('menu', function ($route=null, $name, $icon = null) {
            $html = $icon ? "<i class=\"px-nav-icon fa fa-fw $icon\"></i> <span class=\"px-nav-label\">$name</span>" : $name;
            
            if($route && !empty($route)) $link = Link::toRoute($route, $html);
            else $link = Link::to('#', $html);
            
            return $link->addParentClass('px-nav-item');
        });
        
        Link::macro('submenuHeader', function ($name, $icon = null) {
            $html = '<i class="px-nav-icon fa fa-fw '.$icon.'"></i> <span class="px-nav-label">'. __($name) .'</span>';
            $link = Link::to('#', $html);
            return $link->addParentClass('px-nav-item');
        });
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
