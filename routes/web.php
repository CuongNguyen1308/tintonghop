<?php

use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\CategoryController;
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

Route::get('/', function () {
    return view('client.home');
})->name('home');
Route::get('/contact', function () {
    return view('client.contact');
});
Route::get('/detail', function () {
    return view('client.detail');
});
Route::get('/tin-tuc', [IndexController::class,'blog'])->name('blog');
Route::get('/danh-muc/{slug}', [IndexController::class,'category'])->name('category');
Route::get('/tin-tuc/{slug}', [IndexController::class,'detail_article'])->name('detail_article');
Route::get('/tim-kiem', [IndexController::class,'search'])->name('tim-kiem');
Auth::routes();

Route::prefix('/admin')->middleware(['auth', 'checkRole'])->group(function () {
    Route::get('/', function () {
        return view('admin.dashboard');
    })->name('dashboard');
    Route::resource('category', CategoryController::class);
    Route::resource('article', ArticleController::class);
});
