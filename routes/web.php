<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', 'App\Http\Controllers\front\homePageController@index')->name('Home');
Route::get('/login', 'App\Http\Controllers\front\authController@login')->name('login');
Route::post('/login', 'App\Http\Controllers\front\authController@doLogin')->name('doLogin');
Route::get('/register', 'App\Http\Controllers\front\authController@register')->name('register');
Route::post('/register', 'App\Http\Controllers\front\authController@doRegister')->name('doRegister');


Route::prefix('admin')->namespace('App\Http\Controllers\admin')->middleware(['auth'])->group(function () {
    Route::get('/' ,'dashboardController@index')->name('dashboard.index');



    Route::prefix('projects')->group(function () {
        Route::get('/' ,'projectController@index')->name('dashboard.projects');
    });

    Route::prefix('resume')->group(function () {
        Route::get('/' ,'resumeController@index')->name('dashboard.resumes');
    });
    Route::prefix('blog')->group(function () {
        Route::get('/', 'blogController@index')->name('dashboard.blogs');
    });
    Route::prefix('config')->group(function () {
        Route::get('/', 'configController@index')->name('dashboard.config');
        Route::get('/about', 'configController@editAbout')->name('dashboard.config.about');
        Route::post('/about', 'configController@saveAbout')->name('dashboard.config.about.save');

        Route::get('/contact', 'configController@editContact')->name('dashboard.config.contact');
        Route::post('/contact', 'configController@saveContact')->name('dashboard.config.contact.save');

        Route::get('/service', 'configController@newServices')->name('dashboard.config.services.new');
        Route::get('/serviceEdit/{id}', 'configController@editServices')->name('dashboard.config.services.edit');
//        Route::post('/service', 'configController@saveServices')->name('dashboard.config.services.save');
        Route::post('/service/{id}', 'configController@saveServices')->name('dashboard.config.services.save');


        Route::get('/client', 'configController@newClient')->name('dashboard.config.client.new');
        Route::get('/clientEdit/{id}', 'configController@editClient')->name('dashboard.config.client.edit');
//        Route::post('/service', 'configController@saveServices')->name('dashboard.config.services.save');
        Route::post('/client/{id}', 'configController@saveClient')->name('dashboard.config.client.save');


    });

});
