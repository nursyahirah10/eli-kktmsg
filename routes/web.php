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

Route::redirect('/', '/home');
// Route::view('/test/surat', 'docs.answer');
Route::get('/home', 'HomeController@index')->name('home');

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

        Route::get('/download/letter/permohonan/{company}', 'DownloadController@permohonan')->name('download.letter.permohonan');
        Route::get('/download/letter/jawapan', 'DownloadController@jawapan')->name('download.letter.jawapan');
    });
    
    Route::prefix('admin')->middleware(['role:administrator'])->group(function () {
        Route::get('/manage/company', 'Admin\ManageCompanyController@index')->name('admin.manage.company');
        Route::get('/manage/company/{company}/edit', 'Admin\ManageCompanyController@edit')->name('admin.manage.company.edit');
        Route::put('/manage/company/{company}', 'Admin\ManageCompanyController@update')->name('admin.manage.company.update');
        Route::get('/manage/company/{company}/delete', 'Admin\ManageCompanyController@destroy')->name('admin.manage.company.destroy');

        Route::get('/manage/student', 'Admin\ManageStudentController@index')->name('admin.manage.student');
        Route::get('/manage/student/{student}', 'Admin\ManageStudentController@edit')->name('admin.manage.student.edit');
        Route::get('/manage/student/{student}/delete', 'Admin\ManageStudentController@destroy')->name('admin.manage.student.destroy');
        Route::post('/manage/student/company/{pivot}/flip', 'Admin\ManageStudentController@flip')->name('admin.company.status.flip');
        Route::post('/manage/student/registration/{registration}/quota', 'Admin\ManageStudentController@quota')->name('admin.registration.quota');
    
    });
    
    
    Route::post('/get/cities', 'Api\CountryController@getCities')->name('get.cities');
});


Auth::routes();