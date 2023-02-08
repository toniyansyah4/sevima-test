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


// Auth Route
Auth::routes();

// Comment Route
Route::resource('comments', 'App\Http\Controllers\CommentController');

// Post Route
Route::get('/', [App\Http\Controllers\PostsController::class, 'index'])->name('post.index');

Route::get('/p/create', [App\Http\Controllers\PostsController::class, 'create'])->name('post.create');

Route::post('like/{like}', [App\Http\Controllers\LikeController::class, 'update2'])->name('like.create');

Route::post('/p', [App\Http\Controllers\PostsController::class, 'store'])->name('post.store');

Route::delete('/p/{post}', [App\Http\Controllers\PostsController::class, 'destroy'])->name('post.destroy');

Route::get('/p/{post}', [App\Http\Controllers\PostsController::class, 'show'])->name('post.show');

Route::post('/p/{post}', [App\Http\Controllers\PostsController::class, 'updatelikes'])->name('post.update'); //  This need more time

Route::get('/explore', [App\Http\Controllers\PostsController::class, 'explore'])->name('post.explore'); // Explore Page

Route::get('/posts', [App\Http\Controllers\PostsController::class, 'vue_index']); // Infinite scrolling

// Profile Route
Route::get('/profile/{user}/edit', [App\Http\Controllers\ProfilesController::class, 'edit'])->name('profile.edit');

Route::get('/profile/{user}', [App\Http\Controllers\ProfilesController::class, 'index'])->name('profile.index');

Route::put('/profile/{user}', [App\Http\Controllers\ProfilesController::class, 'update'])->name('profile.update');

Route::any('/search', [App\Http\Controllers\ProfilesController::class, 'search'])->name('profile.search'); // Search Page

// Follow Route
Route::post('/follow/{user}', [App\Http\Controllers\StoryController::class, 'store']);

// Stories Route
Route::get('/stories/create', [App\Http\Controllers\StoryController::class, 'create'])->name('stories.create');

Route::get('/stories/{user}', [App\Http\Controllers\StoryController::class, 'show'])->name('stories.show');

Route::post('/stories', [App\Http\Controllers\StoryController::class, 'store'])->name('stories.store');
