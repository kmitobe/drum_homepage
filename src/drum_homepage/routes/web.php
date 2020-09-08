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
// TOPへの遷移
Route::get('/', 'MenuController@index');
// 通常の表示
Route::get('/post','PostController@index');
// 新規作成
Route::post('/create','PostController@create');
// 一覧
Route::get('/list','ListController@index');
// 削除
Route::post('list/delete/{id}/','ListController@delete');
