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
    return view('welcome');
});

Route::get('/admin/','backendController@dashboard')->name('backend.dashboard');

Route::prefix('/article')->group(function () {
    Route::get('/','backendController@listArticles')->name('backend.article');
    Route::get('/{id}','backendController@listArticles')->name('backend.article.detail');
    Route::get('/create/{id}','backendController@listArticles')->name('backend.article.create');
    Route::get('/update/{id}','backendController@listArticles')->name('backend.article.update');
});

Route::get('/article/','backendController@listArticles')->name('backend.article');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
