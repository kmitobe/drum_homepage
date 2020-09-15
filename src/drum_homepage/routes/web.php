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
// Memberの遷移
Route::get('/member','MemberController@index');
// Information
Route::get('/information','InformationController@index');

Auth::routes();

Route::get('/admin', 'AdminMenuController@index')->name('admin');

Route::get('/admin/schedule', 'AdminScheduleController@index')->name('admin/schedule');
