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
Route::get('/create_post', [HomeController::class, 'create_post'])
->name('home.create_post');


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