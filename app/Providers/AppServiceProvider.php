<?php

namespace App\Providers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Support\Facades\View;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Paginator::useBootstrap();
        $category = Category::whereNot('id', 1)->get();
        $article_popular = Article::with('user')->orderBy('view', 'desc')->limit(5)->get();
        $article_trending = Article::with('user')->where('is_trending', 1)->limit(5)->get();
        View::share([
            'cate_view'=>$category,
            'article_popular'=>$article_popular,
            'article_trending'=>$article_trending,
        ]);
    }
}
