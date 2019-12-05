<?php

namespace App\Providers;


use Illuminate\Support\ServiceProvider;
use App\Tag;
use App\Category;
class DynamicClassname extends ServiceProvider
{

    public function boot(){
        view()->composer('*',function($view){
            $view->with('tags', Tag::all());
        });
        view()->composer('*',function($view){
            $view->with('categories', Category::all());
        });
    }
}
