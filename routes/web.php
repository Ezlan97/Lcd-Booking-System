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

//frontend page

		Auth::routes();

		Route::get('/', function () { return view('welcome'); });

		Route::get('/home', 'HomeController@index')->name('home');

		Route::get('/rules', function() { return view('/rules'); });

		Route::get('/term', function() { return view('/term'); });

		Route::get('/register', function() { return view('auth/register'); }) ->name('register');



//Book

		Route::resource('book','BookController');

		//createBook

		Route::get('/create', function() { return view('book/create'); });

		Route::get('/myLCD', function() { return view('book/myLCD'); });

		Route::get('/myLCD','LcdController@select');

		Route::get('myLCD/{id}','LcdController@edit')->name('editLCD');

		Route::patch('editLCD/{id}', 'LcdController@update')->name('saveLCD');

		Route::get('/create','LcdController@bookList');

		Route::post('/bookLCD', 'BookController@store');

		//admin check

		Route::get('/list', function() { return view('/list'); });

		Route::get('/list','BookController@table');

		//delete

		Route::get('deleteLCD','LcdController@deletepage')->name('DeletePageLCD');

		Route::get('list/{id}','BookController@destroy')->name('DeleteBook');

		//email

		Route::get('/notify', function() { return view('/email'); });

		Route::post('/send', 'BookController@notify');

		//search

		Route::post('/search', 'BookController@search');




//lcd

		Route::resource('lcd','LcdController');

		//create

		Route::get('lcd/create', function() { return view('lcd/create'); });

		Route::post('/store','LcdController@store');

		//delete

		Route::get('/delete', function() { return view('/delete'); });

		Route::get('/delete','LcdController@table');

		Route::get('deleteLCD','LcdController@deletepage')->name('DeletePageLCD');

		Route::get('delete/{id}','LcdController@destroy')->name('DeleteLCD');

		//check LCD

		Route::get('/CheckLCD', function() { return view('/CheckLCD'); });

		Route::get('/CheckLCD', 'LcdController@statusLcd');

		//activate and disable LCD

		Route::get('/live', function() { return view('lcd/live'); });

		Route::get('/live', 'LcdController@activate');

		Route::patch('/setlive/{id}', 'LcdController@setlive')->name('setLive');

		//update

		Route::get('/update', function() { return view('lcd.update');});

		Route::get('/update', 'LcdController@TableUpdate');

		Route::get('update/{id}', 'LcdController@UpdateLCD')->name('UpdateLCD');

		Route::patch('UpdateNew/{id}', 'LcdController@updateNew')->name('NewLCD');



//feedback

		route::resource('feedback','FeedbackController');

		//create

		route::post('/test', 'FeedbackController@create');

		//view all feedback
		route::get('/fList',function() { return view('feedback/fList'); });

		route::get('/fList','FeedbackController@index');

		//delete Feedback
		route::get('fList/{id}','FeedbackController@destroy')->name('DeleteF');



//user
		//update user
		route::get('home/{id}','FeedbackController@userEdit')->name('UpdateUSER');

		Route::patch('updateUser/{id}', 'FeedbackController@updateNew')->name('NewUSER');


