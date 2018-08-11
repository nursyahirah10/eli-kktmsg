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

Route::get('/', 'HomeController@index')->name('home');

Route::middleware(['auth'])->group(function () {
    Route::get('/profile', 'ProfileController@index')->name('profile');
    Route::patch('/profile', 'ProfileController@update');
    Route::get('/registration', 'RegistrationController@index')->name('registration');
    Route::post('/registration', 'RegistrationController@store');
    Route::get('/company', 'CompanyController@index')->name('company');
    Route::get('/company/choose', 'CompanyController@chooseCompany')->name('company.choose');
    Route::post('/company/choose', 'CompanyController@choose');
    Route::get('/company/register', 'CompanyController@registerCompany')->name('company.register');
    Route::post('/company/register', 'CompanyController@store');
});


Auth::routes();