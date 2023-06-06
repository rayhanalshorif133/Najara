<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\HelpController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SearchController;
use Illuminate\Support\Facades\Artisan;
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


Route::get('command', function () {
    dd('migration');
});


// Home 
Route::get('/', [HomeController::class, 'index'])->name('home');


// Category
Route::get('/category', [CategoryController::class, 'index'])->name('category.index');
Route::get('/category/{id}', [CategoryController::class, 'category_selected'])
    ->name('category.selected');

// Account
Route::get('/account', [AccountController::class, 'index'])->name('account.index');

// Search
Route::get('/search/{search_key?}', [SearchController::class, 'search'])->name('search');

// Help
Route::get('/help', [HelpController::class, 'index'])->name('help.index');
