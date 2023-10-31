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

Route::name('admin.')
  ->middleware('auth')
  ->group(function(){
    // 【管理者】自己紹介ページ
    Route::get('auth/about', 'Auth\UsersController@about')->name('about');
    // 【管理者】プロフィール変更表示
    Route::get('auth/profile', 'Auth\UsersController@profile')->name('profile');
    // 【管理者】プロフィール更新
    Route::put('auth/profile', 'Auth\UsersController@updateProfile')->name('updateProfile');
    // 【管理者】パスワード変更表示
    Route::get('auth/password', 'Auth\UsersController@password')->name('password');
    // 【管理者】パスワード更新
    Route::put('auth/password', 'Auth\UsersController@updatePassword')->name('updatePassword');
    // 【管理者】使用言語変更表示
    Route::get('auth/language', 'Auth\UsersController@language')->name('language');
    // 【管理者】使用言語追加
    Route::post('auth/language', 'Auth\UsersController@addLanguage')->name('addLanguage');
    // 【管理者】使用言語、フレームワーク削除
    Route::delete('auth/language/{id}', 'Auth\UsersController@deleteLanguage')->name('deleteLanguage');
    // 【管理者】使用フレームワーク追加
    Route::post('auth/language/{id}', 'Auth\UsersController@addFramework')->name('addFramework');
    // 【管理者】使用ツール変更表示
    Route::get('auth/tool', 'Auth\UsersController@tool')->name('tool');
    // 【管理者】使用ツール追加
    Route::post('auth/tool', 'Auth\UsersController@addTools')->name('addTools');
    // 【管理者】使用ツール削除
    Route::delete('auth/tool/{id}', 'Auth\UsersController@deleteTool')->name('deleteTool');
    // 【管理者】投稿画面
    Route::get('auth/post', 'Auth\PostsController@post')->name('post');
    // 【管理者】投稿作成
    Route::post('auth/create', 'Auth\PostsController@create')->name('create');
    // 【管理者】投稿編集一覧
    Route::get('auth/postlist', 'Auth\PostsController@postlist')->name('postlist');
    // 【管理者】投稿編集詳細
    Route::get('auth/post/edit/{id}', 'Auth\PostsController@postEdit')->name('postEdit');
    // 【管理者】投稿更新
    Route::put('auth/post/edit/{id}', 'Auth\PostsController@postUpdate')->name('postUpdate');
    // 【管理者】投稿削除
    Route::delete('auth/post/edit/{id}', 'Auth\PostsController@postDelete')->name('postDelete');
    // 【管理者】お問い合わせ
    Route::get('auth/contactlist', 'Auth\ContactsController@contactlist')->name('contactlist');
  });

Route::get('home', 'HomeController@index')->name('home');
