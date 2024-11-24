<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', [HomeController::class, 'index'])
->name('home.homepage');
Route::post('/logout', [HomeController::class, 'logout'])
->name('logout');
Route::get('/home', [HomeController::class, 'index'])
->name('home.index');
Route::get('/home/{post}', [HomeController::class, 'detail'])
->name('home.detail');
Route::get('/create_post', [HomeController::class, 'create_post'])->middleware('auth')
->name('home.create_post');
Route::post('/create_post', [HomeController::class, 'user_post'])->middleware('auth')
->name('home.user_post');
Route::get('/my_post', [HomeController::class, 'my_post'])->middleware('auth')
->name('home.my_post');
Route::delete('/my_post/{post}', [HomeController::class, 'my_post_del'])->middleware('auth')
->name('home.my_post_del');
Route::get('/post_update_page/{post}', [HomeController::class, 'post_update_page'])->middleware('auth')
->name('home.post_update_page');
Route::put('/post_update_page/{post}', [HomeController::class, 'update_post_data'])->middleware('auth')
->name('home.update_post_data');
Route::get('/about', [HomeController::class, 'about'])
->name('home.about');
Route::get('/blog', [HomeController::class, 'blog'])
->name('home.blog');
Route::get('/contact', [HomeController::class, 'contact'])
->name('home.contact');
Route::get('/service', [HomeController::class, 'service'])
->name('home.service');


// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified',
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });



Route::get('/post_page', [AdminController::class, 'index'])
->name('admin.index');
Route::post('/post_page', [AdminController::class, 'store'])
->name('admin.store');
Route::get('/show_page', [AdminController::class, 'show'])
->name('admin.show');
Route::get('/edit_page/{post}', [AdminController::class, 'edit'])
->name('admin.edit');
Route::put('/edit_page/{post}', [AdminController::class, 'update'])
->name('admin.update');
Route::delete('/show_page/{post}', [AdminController::class, 'destroy'])
->name('admin.destroy');
Route::get('/show_accept/{post}', [AdminController::class, 'accept'])
->name('admin.accept');
Route::get('/show_reject/{post}', [AdminController::class, 'reject'])
->name('admin.reject');

Route::get('/form_page/', [AdminController::class, 'form'])
->name('admin.form');


