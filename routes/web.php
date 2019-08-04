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

//Route::get('/', function () {
//    return view('welcome');
//});

Auth::routes();

Route::get('/', function () {
    return view('index');
})->name('index');

//顯示最新公告
Route::get('posts','PostsController@index')->name('posts.index');


Route::get('/home', 'HomeController@index')->name('home');



//驗證登入後才能用到的功能
Route::group(['middleware' => 'auth'], function ()
{
//出現最新公告表單
    Route::get('posts/create','PostsController@create')->name('posts.create');

//實際post儲存公告資料
    Route::post('posts/store','PostsController@store')->name('posts.store');

//秀出指定公告
    Route::get('posts/{id}/show','PostsController@show')->name('posts.show');

//出現要修改的指定公告
    Route::get('posts/{id}/edit','PostsController@edit')->name('posts.edit');

//實際儲存修改好的公告資料
    Route::patch('posts/{id}','PostsController@update')->name('posts.update');

//刪除指定的公告
    Route::delete('posts/{id}','PostsController@destroy')->name('posts.destroy');

});
