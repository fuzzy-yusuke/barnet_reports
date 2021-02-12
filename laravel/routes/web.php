<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

// 管理者
Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'can:admin']], function () {

    //管理者TOP画面
    Route::get('/admin/top', 'AdminController@top')->name('admin.top');

    //アカウント一覧
    Route::get('/admin/account/list', 'AdminController@accountList')->name('admin.accountList');
    //アカウント新規作成
    Route::get('/register', 'UserController@registUser');
    //アカウント編集
    Route::get('/admin/account/edit/{id}', 'AdminController@accountEdit')->name('admin.accountEdit');
    Route::post('/admin/account/edit/{id}', 'AdminController@accountUpdate')->name('admin.accountUpdate');
    //アカウント作成完了
    Route::get('/admin/account/complete', 'AdminController@accountComplete')->name('admin.accountComplete');

    //アンケート作成一覧
    Route::get('/admin/enquete/list', 'QuestionController@questionList')->name('admin.questionList');
    //アンケート新規作成
    Route::get('/admin/enquete/create', 'QuestionController@questionCreate')->name('admin.questionCreate');
    //アンケート作成確認
    Route::post('/admin/enquete/confirm', 'QuestionController@questionConfirm')->name('admin.questionConfirm');
    Route::post('/admin/enquete', 'QuestionController@questionStore')->name('admin.questionStore');
    //アンケート作成完了画面
    Route::get('/admin/enquete/complete', 'QuestionController@questionComplete')->name('admin.questionComplete');
    //アンケート作成閲覧
    Route::get('/admin/enquete/read', 'QuestionController@questionRead')->name('admin.questionRead');
    //アンケート編集
    Route::get('/admin/enquete/edit/{id}', 'QuestionController@questionEdit')->name('admin.questionEdit');
    Route::post('/admin/enquete/edit/{id}', 'QuestionController@questionUpdate')->name('admin.questionUpdate');
    Route::get('/admin/result/list', 'QuestionController@resultList')->name('admin.resultList'); //アンケート作成閲覧
});
// 管理者とユーザーを権限によって振り分け
//Route::get('/', 'TopController@index');

// 一般ユーザー
Route::group(['middleware' => ['auth','verified']], function () {
    //一般ユーザーTOP画面
    Route::get('/user/top', 'UserController@top')->name('user.top');

    //アカウント情報画面
    Route::get('/user/account/index', 'UserController@accountIndex')->name('user.accountIndex');

    //アンケート回答画面
    Route::get('/user/enquete/index', 'QuestionController@answerIndex')->name('user.answerIndex');
    //アンケート回答確認画面
    Route::post('/user/enquete/confirm', 'QuestionController@answerConfirm')->name('user.answerConfirm');
    //アンケート回答完了画面
    Route::get('/user/enquete/complete', 'QuestionController@answerComplete')->name('user.answerComplete');
});


Auth::routes();

Auth::routes();


//Route::get('/home', 'HomeController@index')->name('home');
