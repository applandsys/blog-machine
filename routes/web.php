<?php

use App\Http\Controllers\FrontController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [FrontController::class,'homepage'])->name('front.homepage');
Route::get('/detail/{id}/{slug}', [FrontController::class,'postDetail'])->name('front.post-detail');

/*

    Route::get('/category/{id}/{slug}', [FrontController::class,'postDetail'])->name('front.post-detail');
    Route::get('/author/{id}/{slug}', [FrontController::class,'postDetail'])->name('front.post-detail');
    Route::get('/tag/{id}/{slug}', [FrontController::class,'postDetail'])->name('front.post-detail');
    Route::get('/archive/{month}/{slug}', [FrontController::class,'postDetail'])->name('front.post-detail');
    Route::get('/search', [FrontController::class,'postDetail'])->name('front.post-detail');

*/

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
