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

// トップ画面
Route::get('/','UsersController@top')->name('top');
// 自己紹介
Route::get('about','UsersController@about')->name('about');
// 作品
Route::get('work','PostsController@work')->name('work');
// 作品詳細
Route::get('work/{id}', 'PostsController@workdetail')->name('work.details');
// お問い合わせ
Route::get('contact','ContactsController@contact')->name('contact');
// メール送信
Route::post('contact','ContactsController@send')->name('contact.send');
// お問い合わせフォーム
Route::post('contact/create','ContactsController@create')->name('contact.create');
// お問い合わせ確認
Route::post('contact/confirm','ContactsController@confirm')->name('confirm');

// ログイン
Auth::routes();

Route::middleware('auth')
  ->group(function(){
    // 投稿画面
    Route::get('post', 'PostsController@post')->name('post');
    // 投稿作成
    Route::post('create', 'PostsController@create')->name('create');
    // お問い合わせ
    Route::get('contactlist', 'ContactsController@contactlist')->name('contactlist');
  });

Route::get('home', 'HomeController@index')->name('home');
