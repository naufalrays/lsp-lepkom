<?php

use App\Http\Controllers\Articles\AdminArticleController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Articles\UserArticleController;
use App\Http\Controllers\CommentController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', HomeController::class)->name('home');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/dashboard/article/report', [AdminArticleController::class, 'report'])->name('article.report');


Route::controller(UserArticleController::class)->name('user.')->group(function () {
    Route::get('/articles', 'index')->name('article');
    Route::get('/articles/{article}', 'show')->name('show');
});

Route::post('/dashboard/comment/store', [CommentController::class, 'store_user'])->name('comment.storeUser');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('/dashboard/article', AdminArticleController::class);
    Route::resource('/dashboard/comment', CommentController::class);
});

require __DIR__ . '/auth.php';
