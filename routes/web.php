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

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/selfimformation','SelfController@imformation')->name('self');

Route::get('/replyindex','ReplyIndexController@update')->name('replyindex');

Route::get('/','IndexController@update')->name('index');

Route::get('/comment', 'CommentController@index')->name('comment');

Route::post('/comment','CommentController@update');

Route::post('/replyindex','ReplyController@update');

Route::post('/','IndexController@getid');

Route::post('/login','LoginController@login');

Route::get('/logout', 'LogoutController@logout')->name('logout');

Route::post('/del','IndexController@del');



