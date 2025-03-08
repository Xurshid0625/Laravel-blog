<?php

use App\Http\Controllers\Homecontroller;
use App\Http\Controllers\Postcontroller;
use Illuminate\Support\Facades\Route;

// Home controller
Route::get('/', [Homecontroller::class, 'home'])->name('/');
Route::get('/about', [Homecontroller::class, 'about'])->name('about');
Route::get('/resume', [Homecontroller::class, 'resume'])->name('resume');
Route::get('services', [Homecontroller::class, 'services'])->name('services');
Route::get('/skills', [Homecontroller::class, 'skills'])->name('skills');
Route::get('/projects', [Homecontroller::class, 'projects'])->name('projects');
// Route::get('/blog', [Homecontroller::class, 'blog'])->name('blog');
Route::get('/contacts', [Homecontroller::class, 'contacts'])->name('contacts');
// end home controller

// post controller
Route::get('blog', [Postcontroller::class, 'blog']);
Route::get('/post/index', [Postcontroller::class, 'index']);
Route::get('/post/{post}/edit', [PostController::class, 'edit'])->name('post.edit');
Route::put('/post/{post}', [Postcontroller::class, 'update']);
Route::delete('/post/{post}', [Postcontroller::class, 'delete']);



Route::resources([
    'post' => Postcontroller::class,
]);
