<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


Route::group(['prefix' => 'post'], function () {
    Route::get('all', [\App\Http\Controllers\PostsController::class, 'index'])->name('post.all');
    Route::get('create', [\App\Http\Controllers\PostsController::class, 'create'])->name('post.create');
});

require __DIR__.'/auth.php';
