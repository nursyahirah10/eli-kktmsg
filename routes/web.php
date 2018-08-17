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

    Route::middleware(['role:student'])->group(function () {
        Route::get('/profile', 'ProfileController@index')->name('profile');
        Route::patch('/profile', 'ProfileController@update');
        Route::get('/registration', 'RegistrationController@index')->name('registration');
        Route::post('/registration', 'RegistrationController@store');
        Route::post('/registration/remove', 'RegistrationController@remove')->name('registration.remove');
        Route::get('/company', 'CompanyController@index')->name('company');
        Route::get('/company/choose', 'CompanyController@chooseCompany')->name('company.choose');
        Route::post('/company/choose', 'CompanyController@choose');
        Route::get('/company/register', 'CompanyController@registerCompany')->name('company.register');
        Route::post('/company/register', 'CompanyController@store');
        Route::post('/company/assign', 'CompanyController@assign')->name('company.assign');
        Route::get('/download/letter/{name}', 'DownloadController@download')->name('download.letter');
    });
    
    Route::prefix('admin')->middleware(['role:administrator'])->group(function () {
        Route::get('/manage/student', 'Admin\ManageStudentController@index')->name('admin.manage.student');
    });
    
    
    Route::post('/get/cities', 'Api\CountryController@getCities')->name('get.cities');
});


Auth::routes();