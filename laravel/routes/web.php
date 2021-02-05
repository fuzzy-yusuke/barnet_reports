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
    Route::get('/user/enquete/index', 'QuestionController@answerIndex')->name('user.answerIndex'); //アンケート回答画面
    Route::post('/user/enquete/confirm', 'QuestionController@answerConfirm')->name('user.answerConfirm');//アンケート回答確認画面
    Route::get('/user/enquete/complete', 'QuestionController@answerComplete')->name('user.answerComplete');//アンケート回答完了画面


    // 管理者
    Route::get('/admin/top', 'AdminController@top')->name('admin.top'); //管理者TOP画面
    Route::get('/admin/account/list', 'AdminController@accountList')->name('admin.accountList'); //アカウント一覧
    /*Route::get('/admin/account/create', 'AdminController@accountCreate'); //アカウント作成
    Route::post('/admin/account/create', 'AdminController@accountStore'); //アカウント作成処理 */

    Route::get('/admin/account/edit/{id}', 'AdminController@accountEdit')->name('admin.accountEdit'); //アカウント編集
    Route::post('/admin/account/edit/{id}', 'AdminController@accountUpdate')->name('admin.accountUpdate'); //アカウント編集
    Route::get('/admin/account/complete','AdminController@accountComplete')->name('admin.accountComplete');
    Route::get('/admin/enquete/list', 'QuestionController@questionList')->name('admin.questionList'); //アンケート作成一覧
    Route::get('/admin/enquete/create', 'QuestionController@questionCreate')->name('admin.questionCreate'); //アンケート作成画面
    Route::post('/admin/enquete/confirm', 'QuestionController@questionConfirm')->name('admin.questionConfirm');//アンケート作成確認画面
    Route::post('/admin/enquete', 'QuestionController@questionStore')->name('admin.questionStore');//アンケート作成(保存)
    Route::get('/admin/enquete/complete', 'QuestionController@questionComplete')->name('admin.questionComplete');//アンケート作成完了画面
    Route::get('/admin/enquete/read', 'QuestionController@questionRead')->name('admin.questionRead');//アンケート作成閲覧画面
    Route::get('/admin/enquete/edit/{id}', 'QuestionController@questionEdit')->name('admin.questionEdit');//アンケート編集画面
    Route::post('/admin/enquete/edit/{id}', 'QuestionController@questionUpdate')->name('admin.questionUpdate');//アンケート編集
    Route::get('/admin/result/list', 'QuestionController@resultList')->name('admin.resultList');//アンケート作成閲覧画面



});
Auth::routes();

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
