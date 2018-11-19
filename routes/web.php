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
Route::resource('/book','BookController');
Route::resource('/guideline','GuidelineController');
Route::resource('/journal','JournalController');
Route::resource('/newsletter','NewsletterController');
Route::resource('/notice','NoticeController');
Route::resource('/pressrelease','PressreleaseController');
Route::resource('/report','ReportController');
Route::resource('/speech','SpeechController');
Route::resource('/activity','ActivityController');
Route::resource('/profile','ProfileController');
Route::resource('/photo','PhotoController');
Route::resource('/video','VideoController');
Route::resource('/radioprogram','RadioprogramController');
