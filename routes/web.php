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

Route::get('/', 'PostsController@index')->name('top');

//resource()はRouteの一括設定ができ、createメソッドはGET通信、storeメソッドはPOST通信になる
Route::resource('posts', 'PostsController', ['only' => ['create', 'store', 'show', 'edit', 'update','destroy']]);

Route::resource('comments', 'CommentsController', ['only' => ['store']]);

