<?php

use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Client\IndexController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// Auth
Auth::routes(['verify' => true]);
// Client
Route::get('/', [IndexController::class, 'home'])->name('home');
Route::get('/lien-he', [IndexController::class, 'contact'])->name('contact')->middleware('verified');
Route::get('/tai-khoan', [IndexController::class, 'myAccount'])->name('myAccount')->middleware('verified');
Route::get('/tin-tuc', [IndexController::class, 'blog'])->name('blog');
Route::get('/danh-muc/{slug}', [IndexController::class, 'category'])->name('category');
Route::get('/tin-tuc/{slug}', [IndexController::class, 'detail_article'])->name('detail_article');
Route::get('/tim-kiem', [IndexController::class, 'search'])->name('tim-kiem');

Route::get('quan-ly-bai-viet',[IndexController::class,'manage_article'])->name('manage_article');
Route::get('them-bai-viet',[IndexController::class,'add_article'])->name('add_article');
Route::post('them-bai-viet',[IndexController::class,'store_article']);
Route::get('sua-bai-viet/{id}',[IndexController::class,'edit_article'])->name('edit_article');
Route::post('sua-bai-viet/{id}',[IndexController::class,'update_article']);
// Admin
Route::prefix('/admin')->middleware(['auth', 'checkRole'])->group(function () {
    Route::get('/', function () {
        return view('admin.dashboard');
    })->name('dashboard');
    Route::resource('category', CategoryController::class);
    Route::resource('article', ArticleController::class);
    Route::resource('user', UserController::class);
});
