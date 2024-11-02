<?php

use App\Http\Controllers\BookmarkController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ArticlesCRUD;
use App\Http\Controllers\UserCRUD;
use App\Http\Controllers\CommentCRUD;
use Illuminate\Support\Facades\Route;


Route::get('/', [ArticleController::class, 'homepage'])->name('home');

// Route::get('/dashboardd', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::get('/news', function(){
//     return view('index-article');
// });
Route::get('register', function(){
    return view('register-form');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth')->group(function(){
   Route::get('/bookmarked-article', [BookmarkController::class, 'render'])->name('bookmark-article');
   Route::delete('/bookmarked-article/{id}', [BookmarkController::class, 'destroy'])->name('bookmark.destroy');

});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::resource('admin', UserCRUD::class);
    Route::resource('article', ArticlesCRUD::class);
    Route::resource('comment', CommentCRUD::class);
});

Route::get('change-password', function() {
    return view('user-change-password');
})->middleware(['auth', 'verified'])->name('change-password');

Route::get('additional-data', function() {
    return view('user-additional');
})->middleware(['auth', 'verified'])->name('additional-data');

Route::get('my-account', function() {
    return view('user-info-account');
})->middleware(['auth', 'verified'])->name('my-account');




Route::get('/news', [ArticleController::class, 'show']);

Route::get('/news/{slug}', [ArticleController::class, 'showArticle']);



require __DIR__.'/auth.php';
