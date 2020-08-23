<?php

use Illuminate\Support\Facades\Route;

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
    return view('front.landing');
})->name('front.landing');
Route::group(['as' => 'front.','prefix' => 'page'], function () {
    Route::get('/sejarah', 'PageController@history')->name('history');
    Route::get('/redaksi', 'PageController@information')->name('information');
    Route::get('/redaksi/{id}', 'PageController@showInformation')->name('information.detail');
    Route::get('/struktur-pengurus', 'PageController@team')->name('team');
    Route::get('/grafik', 'PageController@showGraphic')->name('graphic');
    Route::get('/wilayah', 'PageController@showWilayah')->name('location');
    Route::get('/kontak', 'PageController@contact')->name('contact');
    Route::get('/pengajuan-surat', 'PageController@letter')->name('letter');
    Route::post('/pengajuan-surat/submit', 'PageController@letterSubmission')->name('letter.submission');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::group(['middleware' => ['auth']], function () {
    Route::group(['as' => 'user.','prefix' => 'pengguna'], function () {
        Route::get('/', 'UserController@index')->name('main')->middleware('role:Perangkat Desa');
        Route::get('/tambah', 'UserController@create')->name('create')->middleware('role:Perangkat Desa');
        Route::post('/tambah', 'UserController@store')->name('store')->middleware('role:Perangkat Desa');
        Route::get('/{id}/edit', 'UserController@edit')->name('edit')->middleware('role:Perangkat Desa');
        Route::patch('/{id}/edit', 'UserController@update')->name('update')->middleware('role:Perangkat Desa');
        Route::delete('/{id}/hapus', 'UserController@destroy')->name('delete')->middleware('role:Perangkat Desa');
    });
    Route::group(['as' => 'category.','prefix' => 'kategori-informasi'], function () {
        Route::get('/', 'CategoryController@index')->name('main')->middleware('role:Perangkat Desa');
        Route::get('/tambah', 'CategoryController@create')->name('create')->middleware('role:Perangkat Desa');
        Route::post('/tambah', 'CategoryController@store')->name('store')->middleware('role:Perangkat Desa');
        Route::get('/{id}/edit', 'CategoryController@edit')->name('edit')->middleware('role:Perangkat Desa');
        Route::patch('/{id}/edit', 'CategoryController@update')->name('update')->middleware('role:Perangkat Desa');
        Route::delete('/{id}/hapus', 'CategoryController@destroy')->name('delete')->middleware('role:Perangkat Desa');
    });
    Route::group(['as' => 'information.','prefix' => 'informasi'], function () {
        Route::get('/', 'InformationController@index')->name('main')->middleware('role:Perangkat Desa');
        Route::get('/tambah', 'InformationController@create')->name('create')->middleware('role:Perangkat Desa');
        Route::post('/tambah', 'InformationController@store')->name('store')->middleware('role:Perangkat Desa');
        Route::post('/upload-image', 'InformationController@upload')->name('upload')->middleware('role:Perangkat Desa');
        Route::get('/{id}/edit', 'InformationController@edit')->name('edit')->middleware('role:Perangkat Desa');
        Route::patch('/{id}/edit', 'InformationController@update')->name('update')->middleware('role:Perangkat Desa');
        Route::delete('/{id}/hapus', 'InformationController@destroy')->name('delete')->middleware('role:Perangkat Desa');
    });
    Route::group(['as' => 'letter.','prefix' => 'pengajuan-surat'], function () {
        Route::get('/', 'LetterSubmissionController@index')->name('main')->middleware('role:Perangkat Desa');
        Route::get('/{id}/cetak', 'LetterSubmissionController@print')->name('print')->middleware('role:Perangkat Desa');
        Route::get('/{id}/edit', 'LetterSubmissionController@edit')->name('edit')->middleware('role:Perangkat Desa');
        Route::patch('/{id}/edit', 'LetterSubmissionController@update')->name('update')->middleware('role:Perangkat Desa');
        Route::delete('/{id}/hapus', 'LetterSubmissionController@destroy')->name('delete')->middleware('role:Perangkat Desa');
        Route::patch('/{id}/verif', 'LetterSubmissionController@verification')->name('verification')->middleware('role:Perangkat Desa');
    });
    Route::group(['as' => 'atribute.','prefix' => 'atribut'], function () {
        Route::get('/', 'AtributeController@index')->name('main')->middleware('role:Perangkat Desa');
        Route::get('/tambah', 'AtributeController@create')->name('create')->middleware('role:Perangkat Desa');
        Route::post('/tambah', 'AtributeController@store')->name('store')->middleware('role:Perangkat Desa');
        Route::get('/{id}/edit', 'AtributeController@edit')->name('edit')->middleware('role:Perangkat Desa');
        Route::patch('/{id}/edit', 'AtributeController@update')->name('update')->middleware('role:Perangkat Desa');
        Route::delete('/{id}/hapus', 'AtributeController@destroy')->name('delete')->middleware('role:Perangkat Desa');
    });
    Route::group(['as' => 'periode.','prefix' => 'periode'], function () {
        Route::get('/', 'PeriodeController@index')->name('main')->middleware('role:Perangkat Desa');
        Route::get('/tambah', 'PeriodeController@create')->name('create')->middleware('role:Perangkat Desa');
        Route::post('/tambah', 'PeriodeController@store')->name('store')->middleware('role:Perangkat Desa');
        Route::get('/{id}/edit', 'PeriodeController@edit')->name('edit')->middleware('role:Perangkat Desa');
        Route::patch('/{id}/edit', 'PeriodeController@update')->name('update')->middleware('role:Perangkat Desa');
        Route::delete('/{id}/hapus', 'PeriodeController@destroy')->name('delete')->middleware('role:Perangkat Desa');
    });
    Route::group(['as' => 'official.','prefix' => 'pejabat-desa'], function () {
        Route::get('/', 'OfficialController@index')->name('main')->middleware('role:Perangkat Desa');
        Route::get('/tambah', 'OfficialController@create')->name('create')->middleware('role:Perangkat Desa');
        Route::post('/tambah', 'OfficialController@store')->name('store')->middleware('role:Perangkat Desa');
        Route::get('/{id}/edit', 'OfficialController@edit')->name('edit')->middleware('role:Perangkat Desa');
        Route::patch('/{id}/edit', 'OfficialController@update')->name('update')->middleware('role:Perangkat Desa');
        Route::delete('/{id}/hapus', 'OfficialController@destroy')->name('delete')->middleware('role:Perangkat Desa');
    });
    Route::group(['as' => 'survey.','prefix' => 'survey'], function () {
        Route::get('/', 'SurveyController@index')->name('main');
        Route::get('/tambah', 'SurveyController@create')->name('create');
        Route::post('/tambah', 'SurveyController@store')->name('store');
    });
});
