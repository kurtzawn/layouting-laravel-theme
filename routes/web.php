<?php

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

Route::get('/', 'Frontend\PageController@home')->name('home');
Route::get('/category', 'Frontend\PageController@category')->name('category');
Route::get('/news', 'Frontend\PageController@news')->name('news');
Route::get('/artist', 'Frontend\PageController@artist')->name('artist');
Route::get('/playlist', 'Frontend\PageController@playlist')->name('playlist');
Route::get('/contact', 'Frontend\PageController@contact')->name('contact');