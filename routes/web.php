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

Route::get('/', 'PageController@home')->name('home');
Route::get('/about', 'PageController@about')->name('about');
Route::get('/post/{id}', 'PageController@post')->name('post');
Route::get('/admin', 'PageController@login')->name('login')->middleware('guest');
Route::post('/admin/checklogin', 'PageController@checkLogin')->name('checkLogin');
Route::get('/admin/logout', 'PageController@logout')->name('logout')->middleware('auth');

Route::get('/admin/allposts', 'PostController@allPosts')->name('allPosts')->middleware('auth');
Route::get('/admin/createpost', 'PostController@createPost')->name('createPost')->middleware('auth');
Route::post('/admin/createpost', 'PostController@_createPost')->name('_createPost')->middleware('auth');
Route::get('/admin/editpost/{id}', 'PostController@editPost')->name('editPost')->middleware('auth');
Route::post('/admin/editpost/{id}', 'PostController@_editPost')->name('_editPost')->middleware('auth');
Route::get('/admin/deletepost/{id}', 'PostController@deletePost')->name('deletePost')->middleware('auth');
