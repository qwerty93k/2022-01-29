<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('articleimages')->group(function () {
    Route::get('', 'App\Http\Controllers\ArticleImageController@index')->name('articleimages.index');
    Route::get('create', 'App\Http\Controllers\ArticleImageController@create')->name('articleimages.create');
    Route::post('store', 'App\Http\Controllers\ArticleImageController@store')->name('articleimages.store');
    Route::get('edit/{articleimage}', 'App\Http\Controllers\ArticleImageController@edit')->name('articleimages.edit');
    Route::post('update/{articleimage}', 'App\Http\Controllers\ArticleImageController@update')->name('articleimages.update');
    Route::post('destroy/{articleimage}', 'App\Http\Controllers\ArticleImageController@destroy')->name('articleimages.destroy');
    Route::get('show/{articleimage}', 'App\Http\Controllers\ArticleImageController@show')->name('articleimages.show');
});

Route::prefix('articles')->group(function () {
    Route::get('', 'App\Http\Controllers\ArticleController@index')->name('articles.index');
    Route::get('create', 'App\Http\Controllers\ArticleController@create')->name('articles.create');
    Route::post('store', 'App\Http\Controllers\ArticleController@store')->name('articles.store');
    Route::get('edit/{article}', 'App\Http\Controllers\ArticleController@edit')->name('articles.edit');
    Route::post('update/{article}', 'App\Http\Controllers\ArticleController@update')->name('articles.update');
    Route::post('destroy/{article}', 'App\Http\Controllers\ArticleController@destroy')->name('articles.destroy');
    Route::get('show/{article}', 'App\Http\Controllers\ArticleController@show')->name('articles.show');
});

Route::prefix('articlecategories')->group(function () {
    Route::get('', 'App\Http\Controllers\ArticleCategoryController@index')->name('articlecategories.index');
    Route::get('create', 'App\Http\Controllers\ArticleCategoryController@create')->name('articlecategories.create');
    Route::post('store', 'App\Http\Controllers\ArticleCategoryController@store')->name('articlecategories.store');
    Route::get('edit/{articlecategory}', 'App\Http\Controllers\ArticleCategoryController@edit')->name('articlecategories.edit');
    Route::post('update/{articlecategory}', 'App\Http\Controllers\ArticleCategoryController@update')->name('articlecategories.update');
    Route::post('destroy/{articlecategory}', 'App\Http\Controllers\ArticleCategoryController@destroy')->name('articlecategories.destroy');
    Route::get('show/{articlecategory}', 'App\Http\Controllers\ArticleCategoryController@show')->name('articlecategories.show');
});
