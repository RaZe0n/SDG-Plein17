<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FAQController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\PredicateController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WorkshopController;
use App\Http\Requests\FaqRequest;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/about', function () {
    return view('pages.aboutus');
})->name('about');

Route::get('/predicaat', function () {
    return view('pages.predicaat');
})->name('predicaat');

Route::get('/gallery', function () {
    return view('pages.gallery');
})->name('gallery');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});

Route::middleware(['auth', 'isUserAdmin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('/admin/users', [UserController::class, 'index'])->name('admin.users');
    Route::get('/admin/users/create', [UserController::class, 'create'])->name('admin.users.create');
    Route::get('/admin/users/{user}/edit', [UserController::class, 'edit'])->name('admin.users.edit');
    Route::delete('/admin/users/{user}', [UserController::class, 'destroy'])->name('admin.users.destroy');
    Route::put('/admin/users/{user}', [UserController::class, 'update'])->name('admin.users.update');
    Route::post('/admin/faq', [FAQController::class, 'store'])->name('admin.faq.store');
    Route::get('/admin/faq', [FAQController::class, 'index'])->name('admin.faq');
    Route::get('/admin/faq/create', [FAQController::class, 'create'])->name('admin.faq.create');
    Route::get('/admin/faq/{faq}/edit', [FAQController::class, 'edit'])->name('admin.faq.edit');
    Route::delete('/admin/faq/{faq}', [FAQController::class, 'destroy'])->name('admin.faq.destroy');
    Route::put('/admin/faq/{faq}', [FAQController::class, 'update'])->name('admin.faq.update');
    Route::get('/admin/posts/create', [PostsController::class, 'create'])->name('admin.posts.create');
    Route::delete('/admin/posts/{id}', [PostsController::class, 'destroy'])->name('admin.posts.destroy');
    Route::post('/admin/posts', [PostsController::class, 'store'])->name('admin.posts.store');
    Route::get('/admin/posts/{id}/edit', [PostsController::class, 'edit'])->name('admin.posts.edit');
    Route::put('/admin/posts/{id}', [PostsController::class, 'update'])->name('admin.posts.update');
    Route::get('/admin/posts', [PostsController::class, 'index'])->name('admin.posts');
    Route::get('/admin/predicates', [PredicateController::class, 'index'])->name('admin.predicates');
    Route::get('admin/events', [WorkshopController::class, 'index'])->name('admin.events');
    Route::get('/admin/predicate/view/{id}', [PredicateController::class, 'show'])->name('admin.predicates.show');
    Route::put('/admin/predicate/update/{id}', [PredicateController::class, 'update'])->name('admin.predicates.update');
    Route::post('/predicaat/sent', [PredicateController::class, 'store'])->name('predicaat.sent');
});

Route::get('/news', [PostsController::class, 'messages'])->name('news');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
