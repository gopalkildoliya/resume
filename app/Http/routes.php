<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'HomeController@index');

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web'], 'namespace' => 'Admin', 'prefix' => 'admin'], function () {
    Route::get('dashboard', 'DashboardController@index');
    Route::resource('project', 'ProjectController');
    Route::resource('education', 'EducationController');
    Route::resource('position', 'PositionController');
    Route::resource('personal-detail', 'PersonalDetailController');
    Route::resource('certification', 'CertificationController');
    Route::resource('skill', 'SkillController');
    Route::resource('volunteer', 'VolunteerController');
    Route::resource('language', 'LanguageController');
    Route::resource('award', 'AwardController');
    Route::resource('additional', 'AdditionalController');

});

Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/home', 'HomeController@index');

});
