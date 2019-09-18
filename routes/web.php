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

Route::get('/', function () {
    return view('welcome');
});


Route::get('send_mail',function(){
	mail('weilaimtop@gamil.com','测试邮件','这是一封测试邮件');
	return 'send mail';
});

Route::get('about',function(){
	return view('about.about');
});

Route::get('to_test','WelcomeController@index');

