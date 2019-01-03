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

//PHẦN NÀY CỦA CHÂU
//Page group
Route::group(['prefix'=>'page'], function(){
    //Home
    Route::get('home',['as'=>'getHome','uses'=>'pageController@getHome']);

    //Điều khoản (terms)
    Route::get('terms',['as'=>'getTerms','uses'=>'pageController@getTerms']);

    //User (profile)
    Route::get('add-question',['as'=>'getAddQuestion','uses'=>'pageController@getAddQuestion']);

    //Question details
    Route::get('question-details',['as'=>'getQuestionDetails','uses'=>'pageController@getQuestionDetails']);

    //User
    //ĐÂY CHỈ LÀ TRANG CHUNG, CÒN KHI NGƯỜI DÙNG ĐĂNG NHẬP THÌ HIỂN THỊ ĐÚNG THEO USERNAME
    Route::get('user',['as'=>'getUser','uses'=>'pageController@getUser']);
//    Route::get('user/{username}',['as'=>'getUser','uses'=>'pageController@getUser']);

    //Contact
    Route::get('contact',['as'=>'getContact','uses'=>'pageController@getContact']);
});
