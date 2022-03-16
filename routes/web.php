<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\SearchController;


Auth::routes(); 

Route::get('/', [FrontendController::class, 'index'])->name('home');
Route::get('/privacy-policy', [FrontendController::class, 'privacy'])->name('privacy');
Route::get('/cookie-policy', [FrontendController::class, 'cookie'])->name('cookie');
Route::get('/archive', [FrontendController::class, 'archive'])->name('archive');
Route::get('/posts', [FrontendController::class, 'dateWisePost'])->name('date.wise.post');

Route::get('/category/{category}', [FrontendController::class, 'categoryWiseNews'])->name('category.wise.news');

Route::get('/search', [SearchController::class, 'index'])->name('search');
Route::get('/{post_slug}', [FrontendController::class, 'details'])->name('details');
Route::get('/district/{slug}', [FrontendController::class, 'district'])->name('district');
 