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

Route::post('/signUp', array(
    'as' => 'signUp',
    'uses' => 'GuestController@register'
));

Route::post('/login', array(
    'as' => 'login',
    'uses' => 'GuestController@login',
));

Route::get('/logout', array(
    'as' => 'logout',
    'uses' => 'GuestController@logout',
));

/**  Dashboard  **/ 
Route::group(['namespace' => 'Teacher','prefix' => 'teacher', 'as' => 'teacher.'], function()
{

    Route::get('/dashboard', ['as' => 'dashboard', 'uses' => 'DashboardController@index']);



    /* School Year Routes*/

    Route::group([ 'prefix' => "school_year", 'as' => 'school_year.' ], function()
    {

        Route::match(['get','post'], '/index', [ 'as' => 'index', 'uses' => "SchoolYearController@index"]);
        Route::match(['get'], '/add', [ 'as' => 'getAddSchoolYear', 'uses' => "SchoolYearController@getAddSchoolYear"]);
        Route::match(['post'], '/add', [ 'as' => 'postAddSchoolYear', 'uses' => "SchoolYearController@postAddSchoolYear"]);
        Route::match(['get','post'], '/edit/{school_year_id}', [ 'as' => 'editSchoolYear', "uses" => "SchoolYearController@editSchoolYear"]);

    });


    /* classes Routes*/

    Route::group([ 'prefix' => "classes", 'as' => 'classes.' ], function()
    {

        Route::match(['get','post'], '/index', [ 'as' => 'index', 'uses' => "ClassesController@index"]);
        Route::match(['get'], '/add', [ 'as' => 'getAddClass', 'uses' => "ClassesController@getAddClass"]);
        Route::match(['post'], '/add', [ 'as' => 'postAddClass', 'uses' => "ClassesController@postAddClass"]);
        Route::match(['get','post'], '/edit/{class_id}', [ 'as' => 'edit', "uses" => "ClassesController@editClass"]);

    });

});




Route::get('/privacy', function () {
    return view('privacy');
});

Route::get('/reviews', function () {
    return view('reviews');
});

Route::get('/terms', function () {
    return view('terms');
});

Route::get('/tutorials', function () {
    return view('tutorials');
});


