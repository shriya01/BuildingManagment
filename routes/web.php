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
Route::get('/',[
'uses' => 'UserController@getSignUp',
'as' => 'user.signup',
]);

    //User registration routes
    Route::get('/signup',[
    'uses' => 'UserController@getSignUp',
    'as' => 'user.signup',
    ]);

    Route::post('/signup',[
    'uses' => 'UserController@postSignUp',
    'as' => 'user.signup'
    ]);

    Route::get('/signin',[
    'uses' => 'UserController@getSignIn',
    'as' => 'user.signin'
    ]);
    Route::post('/signin',[
    'uses' => 'UserController@postSignIn',
    'as' => 'user.signin'
    ]);


    Route::get('/logout',[
    'uses' => 'UserController@getLogout',
    'as' => 'user.logout'
    ]);
    
    //User profile routes
    Route::get('/profile', [
    'uses' => 'UserController@getUserProfile',
    'as' => 'user.profile'
    ]); 




