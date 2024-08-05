<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreArticleRequest;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Exception;

class IndexController extends Controller
{
    public function home()
    {
        $article = Article::with('user')->orderBy('created_at', 'desc')->paginate(10);
        $article_hot = Article::with('user')->where('is_hot', 1)->limit(5)->get();
        $article_banner = Article::with('user')->inRandomOrder()->limit(5)->get();
        $article_new = Article::with('user')->orderBy('created_at', 'desc')->limit(4)->get();
        return view('client.home', compact('article','article_banner','article_new','article_hot'));
    }
    public function contact()
    {
        $article = Article::with('user')->orderBy('created_at', 'desc')->paginate(10);
        $article_hot = Article::with('user')->where('is_hot', 1)->limit(5)->get();
        $article_banner = Article::with('user')->inRandomOrder()->limit(5)->get();
        $article_new = Article::with('user')->orderBy('created_at', 'desc')->limit(4)->get();
        return view('client.contact', compact('article','article_banner','article_new','article_hot'));
    }
    public function blog()
    {
        $article = Article::with('user')->orderBy('created_at', 'desc')->paginate(10);
        return view('client.blog', compact('article'));
    }
    public function category($slug)
    {
        $cate_slug = Category::whereNot('id', 1)->where('slug', $slug)->first();
        $article = Article::with('category')->where('category_id', $cate_slug->id)->paginate(10);
        return view('client.category', compact('article', 'cate_slug'));
    }
    public function detail_article($slug)
    {
        $detail_article = Article::with('category')->where('slug', $slug)->first();
        Article::query()->where('id',$detail_article->id)->increment('view',1);
        return view('client.detail', compact('detail_article'));
    }
    public function myAccount(){
        $account = Auth::user();
        return view('client.my-account',compact('account'));
    }
    public function search()
    {
        if (isset($_GET['search'])) {
            $search = $_GET['search'];
            $article = Article::where('name', 'like', '%' . $search . '%')->orWhere('content', 'like',  '%' . $search . '%')->orderBy('updated_at', 'desc')->paginate(10);
            return view('client.search', compact('search', 'article'));
        } else {
            return redirect()->to('/');
        }
    }
    public function manage_article(){
        $list_article = Article::where('user_id',Auth::user()->id)->orderBy('created_at','desc')->paginate(5);
        return view('client.myArticle.manage-article',compact('list_article'));
    }
    public function add_article(){
        return view('client.myArticle.form-article');
    }
    public function store_article(StoreArticleRequest $request ){
        $image = "";
        try {
            DB::transaction(function(){
                if (request()->hasFile("image")) {
                    $image = Storage::put('article', request()->file("image"));
                }else {
                    $image = request()->image_link;
                }
                $article = [
                    'name' => request()->name,
                    'slug' => Str::slug(request()->name),
                    'image' => $image,
                    'summary' => request()->summary,
                    'content' => request()->content,
                    'category_id' => request()->category_id,
                    'user_id' => Auth::user()->id,
                    'is_hot' => 0,
                ];
                Article::create($article);
                return redirect()->route('manage_article')->with('success', 'Thêm mới bài viết thành công');
            },3);
        } catch (Exception $exception) {
            if (Storage::exists($image)) {
                Storage::delete($image);
            }
            return back()->with('error', $exception->getMessage());
        }
    }
    public function edit_article(Article $article){
        return view('client.myArticle.form-article',compact('article'));
    }
    public function update_article(Request $request){
        
    }
}
