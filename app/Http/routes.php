<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


//use Illuminate\Routing\Route;

Route::get('/', 'PublicController@index');

Route::get('home', 'PublicController@index');
Route::get('about', 'PublicController@showAbout');
Route::get('projects', 'PublicController@showProjects');
Route::get('contact-us', 'PublicController@showContact');
Route::get('videos', 'PublicController@showVideos');
Route::get('gallery', 'PublicController@showGallary');
// Route::post('contact-us', ['as'=>'sendmessage', 'uses'=>'PublicController@postEmail']);
Route::post('sendmessage', function(){

        Mail::send('__partials/data/sendmail', ['some','on'], function($message){

            $message->to('sulsiralumo@gmail.com')
                    ->subject('a message from laravel');
        });
});

Route::get('signup', 'PublicController@showSignup');
Route::post('signup', 'PublicController@postSignup');
Route::get('approved', 'MembersshipsController@showApproved');
Route::get('unapproved', 'MembersshipsController@showUnapproved');
Route::resource('memberships', 'MembersshipsController');

Route::resource('sessions','SessionsController');

// Authentication routes...
//Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

Route::group(['middleware' => 'auth'], function () {
    Route::resource('admin', 'AdminController');
//    Route::get('auth/register', 'Auth\AuthController@getRegister');
});
