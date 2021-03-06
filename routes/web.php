<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/','GuestController@index');
Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/ex', 'excontroller@ex');
Route::group(['middleware' => 'web'], function (){
Route::group(['prefix'=>'admin', 'middleware'=>['auth','role:admin']],function(){
   Route::resource('authors', 'AuthorsController');
   Route::resource('books', 'BooksController');
   Route::get('books/{book}/borrow', [
	'middleware'=>['auth','role:member'],
	'as'=>'guest.books.borrow',
	'uses'=>'BooksController@borrow']);
   
   Route::put('books/{books}/return', [
   'middleware' => ['auth','role:member'],
   'as'         => 'member.books.return',
   'uses'       => 'BooksController@returnBack'
	]);
Route::get('auth/verify/{token}','Auth\RegisterController@verify');
Route::get('auth/send-verification','Auth\RegisterController@sendVerification');
Route::get('settings/profile','SettingsController@profile');
Route::get('settings/profile/edit', 'SettingsController@editProfile');
Route::post('settings/profile','SettingsController@updateProfile');
Route::get('settings/password','SettingsController@editPassword');
Route::post('settings/password','SettingsController@updatePassword');
});
});
