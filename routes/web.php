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

// Route::get('/', function () {
//     return view('pages.index');
// });

Route::resource('/','IndexController');
Route::resource('/publication/book','BookController');
Route::resource('/publication/report','ReportController');
Route::resource('/publication/guideline','GuidelineController');
Route::resource('/publication/newsletter','NewsletterController');
Route::resource('/publication/journal','JournalController');
Route::resource('/pressrelease','PressreleaseController');
Route::resource('/radioprogram','RadioprogramController');
Route::resource('/notice','NoticeController');
Route::resource('/speech','SpeechController');
Route::resource('/profile/activity','ActivityController');
Route::resource('/profile/profile','ProfileController');
Route::resource('/gallery/photo','PhotoController');
Route::resource('/gallery/video','VideoController');

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
