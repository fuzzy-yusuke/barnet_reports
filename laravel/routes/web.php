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

 /*Route::get('/', function () {
     return view('welcome');
 });*/
// Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function() {
    // 管理者とユーザーを権限によって振り分け
    Route::get('/', 'TopController@index');

    // 一般ユーザー
    Route::get('/user/top', 'UserController@top')->name('user.top'); //一般ユーザーTOP画面
    Route::get('/user/account/index', 'UserController@accountIndex')->name('user.accountIndex'); //アカウント情報画面
    Route::get('/user/account/edit', 'UserController@accountEdit')->name('user.accountEdit'); //アカウント情報編集画面
    Route::post('/user/account/edit', 'UserController@accountUpdate')->name('user.accountUpdate');
    Route::get('/user/enquete/list', 'QuestionController@questionList')->name('user.questionList'); //アンケート回答一覧
    Route::get('/user/enquete/index', 'QuestionController@questionIndex')->name('user.questionIndex'); //アンケート回答画面

    // 管理者
    Route::get('/admin/top', 'AdminController@top'); //管理者TOP画面
    Route::get('/admin/account/list', 'AdminController@accountList'); //アカウント一覧
    Route::get('/admin/account/create', 'AdminController@accountCreate'); //アカウント作成
    Route::post('/admin/account/create', 'AdminController@accountStore'); //アカウント作成処理

    Route::get('/admin/account/edit/{id}', 'AdminController@accountEdit'); //アカウント編集
    Route::post('/admin/account/edit/{id}', 'AdminController@accountUpdate'); //アカウント編集



});
Auth::routes();

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
