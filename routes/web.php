<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'homepage'])
->name('home.homepage');


// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified',
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });

route::get('/home', [HomeController::class, 'index'])
->name('home.index');


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