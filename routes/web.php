<?php


Route::group(['middleware' => ['web']] , function() {
    Route::get('/', function () {
        return view('log_signup');
    });

    Route::post('/signup',[ 'as' => 'signup' , 'uses' => 'UserController@postSignup']);

    Route::post('/placeorder',[ 'as' => 'placeorder' , 'uses' => 'UserController@loadPlaceorder']);

    Route::get('/placeorder',[ 'as' => 'placeorder1' , 'uses' => 'UserController@loadPlaceorder']);

    Route::post('/orderplaced',[ 'as' => 'orderplaced' , 'uses' => 'OrderController@orderPlace']);

    Route::get('/home',[ 'as' => 'home' , 'uses' => 'UserController@loadHome']);

    Route::post('/home',[ 'as' => 'home2' , 'uses' => 'UserController@loadHome']);

    Route::post('/login',[ 'as' => 'login' , 'uses' => 'UserController@postSignin']);

    Route::get('/account',[ 'as' => 'account' , 'uses' => 'UserController@getAccount']);

    Route::get('/orders',[ 'as' => 'orders' , 'uses' => 'UserController@getOrders']);

    Route::get('/',[ 'as' => 'logout' , 'uses' => 'UserController@logout']);

    Route::post('/editprofile',[ 'as' => 'editprofile' , 'uses' => 'UserController@loadedit']);

    Route::get('/saveprofile',[ 'as' => 'save' , 'uses' => 'UserController@postSave']);

});