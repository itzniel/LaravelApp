<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Article;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
       // $title = Article::get()->last() ? Article::get()->last()->name : 'No Images';
       // View::share('lastPostedArticle', $title);
        View::composer('master',function ($view){
            $title = Article::get()->last() ? Article::get()->last()->name : 'No Images';
            return $view->with('lastPostedArticle', $title);
        });

    }
}
