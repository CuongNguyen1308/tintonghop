<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function blog()
    {
        $category = Category::whereNot('id', 1)->get();
        $article = Article::with('user')->orderBy('created_at', 'desc')->paginate(10);
        $article_popular = Article::with('user')->orderBy('view', 'desc')->limit(5)->get();
        $article_trending = Article::with('user')->where('is_trending', 1)->limit(5)->get();
        return view('client.blog', compact('article', 'article_trending', 'article_popular', 'category'));
    }
    public function category($slug)
    {
        $category = Category::whereNot('id', 1)->get();
        $article_popular = Article::with('user')->orderBy('view', 'desc')->limit(5)->get();
        $article_trending = Article::with('user')->where('is_trending', 1)->limit(5)->get();

        $cate_slug = Category::whereNot('id', 1)->where('slug', $slug)->first();
        $article = Article::with('category')->where('category_id', $cate_slug->id)->paginate(10);
        return view('client.category', compact('article', 'article_trending', 'article_popular', 'category', 'cate_slug'));
    }
    public function detail_article($slug)
    {
        $category = Category::whereNot('id', 1)->get();
        $article_popular = Article::with('user')->orderBy('view', 'desc')->limit(5)->get();
        $article_trending = Article::with('user')->where('is_trending', 1)->limit(5)->get();

        $detail_article = Article::with('category')->where('slug', $slug)->first();
        return view('client.detail', compact('detail_article', 'article_trending', 'article_popular', 'category'));
    }
    public function search()
    {
        if (isset($_GET['search'])) {
            $category = Category::whereNot('id', 1)->get();
            $article_popular = Article::with('user')->orderBy('view', 'desc')->limit(5)->get();
            $article_trending = Article::with('user')->where('is_trending', 1)->limit(5)->get();
            $search = $_GET['search'];
            $article = Article::where('name', 'like', '%' . $search . '%')->orWhere('content', 'like',  '%' . $search . '%')->orderBy('updated_at', 'desc')->paginate(10);
            return view('client.search', compact('search', 'article', 'article_trending', 'article_popular', 'category'));
        } else {
            return redirect()->to('/');
        }
    }
}
