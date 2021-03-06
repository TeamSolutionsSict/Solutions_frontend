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


Route::get('home',['as'=>'get.Home','uses'=>'pageController@getHome']);

Route::get('terms',['as'=>'get.Terms','uses'=>'pageController@getTerms']);

Route::get('add-question',['as'=>'get.AddQuestion','uses'=>'pageController@getAddQuestion']);
Route::post('add-question',['as'=>'post.AddQuestion','uses'=>'pageController@postAddQuestion']);

Route::get('question-details',['as'=>'get.QuestionDetails','uses'=>'pageController@getQuestionDetails']);
//Route::get('question-details{id}',['as'=>'get.QuestionDetails','uses'=>'pageController@getQuestionDetails']);

//Profile của người đang đăng nhập
Route::get('profile',['as'=>'get.Profile','uses'=>'pageController@getProfile']);
//xem thông tin của người khác
Route::get('user',['as'=>'get.User','uses'=>'pageController@getUser']);

Route::get('contact',['as'=>'get.Contact','uses'=>'pageController@getContact']);

