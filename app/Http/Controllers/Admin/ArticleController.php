<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class ArticleController extends Controller
{
    public function index()
    {
        $list = Article::with('category')->paginate(10);
        return view('admin.article.index', compact('list'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $category = Category::whereNot('id', 1)->get();
        return view('admin.article.form', compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'summary' => 'required',
            'content' => 'required',
        ]);
        $get_image = $request->file('image');
        if ($get_image) {
            $get_image_name = $get_image->getClientOriginalName(); //hinhanh.jpg
            $name_image = current(explode('.', $get_image_name)); //[0]=>hinhanh .[1]=>jpg || current lấy đầu tiên, end lấy cuối cùng
            $new_image = $name_image . rand(0, 999) . '.' . $get_image->getClientOriginalExtension(); // hinhanh1234 .  getClientOriginalExtension() lấy đuôi mở rộng
            $get_image->move('uploads/', $new_image); // copy hình ảnh vào đường dẫn và lưu tên
            // File::copy($path,$name_image,$path_gallery,$new_image); thêm thôi k liên quan
        } else {
            $new_image = $request->image_link;
        }
        if (!isset($request->category_id)) {
            $category_id = 1;
        } else {
            $category_id = $request->category_id;
        }
        if (Auth::check()) {
            $user_id = Auth::id();
        }
        $article = [
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'image' => $new_image,
            'summary' => $request->summary,
            'content' => $request->content,
            'category_id' => $category_id,
            'user_id' => $user_id,
            'is_hot' => $request->is_hot,
        ];
        Article::create($article);
        return redirect()->back()->with('success', 'Thêm mới bài viết thành công');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $article = Article::find($id);
        $category = Category::whereNot('id', 1)->get();
        return view('admin.article.form', compact('article', 'category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $article = Article::find($id);
        $request->validate([
            'name' => 'required|max:255',
            'summary' => 'required|max:255',
            'content' => 'required',
        ]);
        $get_image = $request->file('image');
        if (isset($get_image)) {
            if (!empty($article->image)) {
                // unlink('uploads/' . $article->image); //xóa ảnh khỏi
                $get_image_name = $get_image->getClientOriginalName(); //hinhanh.jpg
                $name_image = current(explode('.', $get_image_name)); //[0]=>hinhanh .[1]=>jpg || current lấy đầu tiên, end lấy cuối cùng
                $new_image = $name_image . rand(0, 999) . '.' . $get_image->getClientOriginalExtension(); // hinhanh1234 .  getClientOriginalExtension() lấy đuôi mở rộng
                $get_image->move('uploads/', $new_image); // copy hình ảnh vào đường dẫn và lưu tên
                // File::copy($path,$name_image,$path_gallery,$new_image); thêm thôi k liên quan
            }
        } else {
            $new_image = $request->image_link;
        }
        if (!isset($request->category_id)) {
            $category_id = 1;
        } else {
            $category_id = $request->category_id;
        }
        if (Auth::check()) {
            $user_id = Auth::id();
        }
        $article = [
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'image' => $new_image,
            'summary' => $request->summary,
            'content' => $request->content,
            'category_id' => $category_id,
            'user_id' => $user_id,
            'is_hot' => $request->is_hot,
        ];
        Article::where('id', $id)->update($article);
        return redirect()->route('article.index')->with('warning', 'Cập nhật bài viết thành công');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Article::find($id)->delete();
        return redirect()->back()->with('danger', 'Xóa bài viết thành công');
    }
}
