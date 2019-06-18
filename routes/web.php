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

Route::get('/', function () {
    return view('webmag.views.homepage.homepage');
});

Route::get('/category', function () {
    return view('webmag.views.category.category');
});

/**
 * Gọi đến view welcome1
 */
Route::get("/abc", function() {
    return view('welcome1');
});

Route::get("/abc1", function() {
    return view('folder1.welcome2');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
