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
// Scheduleの遷移
Route::get('/schedule','ScheduleController@index');
Route::post('/schedule/search','ScheduleController@search');

// Memberの遷移
Route::get('/member','MemberController@index');
// Information
Route::get('/information','InformationController@index');

// admin機能
Auth::routes();
Route::get('/admin', 'AdminMenuController@index')->name('admin');
// スケジュール
Route::get('/admin/schedule', 'AdminScheduleController@index')->name('admin/schedule');
Route::post('/admin/schedule', 'AdminScheduleController@schedule_register')->name('admin/schedule');
// お知らせ
Route::get('/admin/infomation','AdminInfomationController@index')->name('admin/info');
Route::post('/admin/infomation','AdminInfomationController@infomation_register')->name('admin/info');
Route::get('/admin/infomation/detail/{id}','AdminInfomationDetailController@index');
Route::post('/admin/infomation/detail/{id}','AdminInfomationDetailController@update');
// メンバー
Route::get('/admin/member','AdminMemberController@index')->name('admin/member');