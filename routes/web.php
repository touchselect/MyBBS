<?php

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

Route::get('/', function () {
    return redirect('/articles');
});

Route::get('/articles', 'App\Http\Controllers\ArticleController@index')->name('article.list');
Route::get('/artcle/new', 'App\Http\Controllers\ArticleController@create')->name('article.new');
Route::post('/artcle', 'App\Http\Controllers\ArticleController@store')->name('article.store');
Route::get('/article/edit/{id}', 'App\Http\Controllers\ArticleController@edit')->name('article.edit');
Route::post('/article/update/{id}', 'App\Http\Controllers\ArticleController@update')->name('article.update');
Route::get('/article/{id}', 'App\Http\Controllers\ArticleController@show')->name('article.show');
Route::delete('/article/{id}', 'App\Http\Controllers\ArticleController@destroy')->name('article.delete');
