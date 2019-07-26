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


//News management CRUD Route
Route::resource('management', 'AdminController', ['only' => [
    'create', 'store', 'edit','update','destroy'
]]);

Route::get('/management',[
    'as'=>'management',
    'uses'=>'AdminController@index'
]);

Route::get('/management/create',[
    'as'=>'management.create',
    'uses'=>'AdminController@create'
]);

Route::post('/management',[
    'as'=>'management.store',
    'uses'=>'AdminController@store'
]);
Route::get('/management/{id}/edit',[
    'as'=>'management.edit',
    'uses'=>'AdminController@edit'
]);

Route::put('/management/{id}',[
    'as'=>'management.update',
    'uses'=>'AdminController@update'
]);

Route::delete('/management/{id}',[
    'as'=>'management.destroy',
    'uses'=>'AdminController@destroy'
]);

//get RSS content

Route::get('rss/content', [
    'as'=>'rss.content',
    'uses'=>'NewsController@getContent'
]);

Route::get('rss/gioithieu', [
    'as'=>'rss.gioithieu',
    'uses'=>'NewsController@gioiThieu'
]);

Route::get('/', [
    'as'=>'news.index',
    'uses'=>'NewsController@index'
]);

Route::get('/thoisu', [
    'as'=>'news.thoisu',
    'uses'=>'NewsController@thoiSu'
]);

Route::get('/kinhdoanh', [
    'as'=>'news.kinhdoanh',
    'uses'=>'NewsController@kinhDoanh'
]);

Route::get('/theothao', [
    'as'=>'news.thethao',
    'uses'=>'NewsController@theThao'
]);

Route::get('/thegioi', [
    'as'=>'news.thegioi',
    'uses'=>'NewsController@theGioi'
]);

Route::get('/phapluat', [
    'as'=>'news.phapluat',
    'uses'=>'NewsController@phapLuat'
]);


//Authencation

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
