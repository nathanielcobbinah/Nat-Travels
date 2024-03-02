<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostController;
use App\Livewire\CategoryManagement;
use App\Livewire\PostCreate;
use App\Livewire\PostDetail;
use App\Livewire\PostEdit;
use App\Livewire\PostList;
use App\Livewire\ContactUs;
use App\Livewire\AboutUs;
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

// Route::view('/', 'welcome');






Route::get('/', PostList::class)->name('posts');
Route::get('/create-post', PostCreate::class)->name('posts.create');
Route::get('/create-categories', CategoryManagement::class)->name('posts.create-categories');
Route::get('/posts/{postId}', PostDetail::class)->name('posts.show');
Route::get('/posts/{postId}/edit', PostEdit::class)->name('posts.edit');
Route::get('/contact', ContactUs::class)->name('contact');
Route::get('/about', AboutUs::class)->name('about');




Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
