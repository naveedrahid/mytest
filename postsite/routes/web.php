<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostrzController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [PostrzController::class, 'index'])->name('home');
Route::get('post/post_detail/{post_id}', [PostrzController::class, 'post_detail'])->name('post_detail');
Route::get('categories/{cat_id}', [PostrzController::class, 'category_detail'])->name('category_detail');
Route::post('post/search', [PostrzController::class, 'search'])->name('search');
Route::get('/register', [PostrzController::class, 'register'])->name('register');
Route::post('/register', [PostrzController::class, 'register_user'])->name('register_user');
Route::get('/login', [PostrzController::class, 'login'])->name('login');
Route::post('login_user', [PostrzController::class, 'login_user'])->name('login_user');
Route::post('logout', [PostrzController::class, 'logout'])->name('logout');

Route::group(['prefix' => 'admin', 'middleware' => ['auth_check']], function(){
    Route::get('/posts/dashboard', [AdminController::class, 'index'])->name('admin');
    Route::get('/posts/create', [AdminController::class, 'create'])->name('create_post');
    Route::post('/posts/store', [AdminController::class, 'store'])->name('store');
    Route::post('/posts/edit/{slug}', [AdminController::class, 'edit'])->name('edit_post');
});