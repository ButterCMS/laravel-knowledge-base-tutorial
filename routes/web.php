<?php


use App\Http\Controllers\BlogController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\KbController;
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


Route::get('/', [KbController::class, 'showKbPage'])->where('slug', '.*');
Route::get('/article/search', [KbController::class, 'showArticlesBySearchQuery']);
Route::get('/KbCategories/{param}', [KbController::class, 'showCategory'])->name('showCategory');
Route::get('/KbArticle/{param}', [KbController::class, 'showArticles'])->name('showArticles');
