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



Route::get('/advice','TutorController@train');

//admin
Route::get('/admin','AdminController@index');
Route::get('/adminlogin','AdminController@login');
Route::get('/admincheck','AdminController@adminchck')->name('add.check');

Route::get('/syllabus','AdminController@syllabus');
Route::post('/store/syllabus', 'AdminController@syllabusstore')->name('store.syllabus');
Route::get('/showsyllabus', 'AdminController@syllabusshow')->name('show.syllabus');


Route::get('/scammer','ScamController@scammer');
Route::post('/store/scammer', 'ScamController@scammerstore')->name('store.scam');
Route::get('/showscam', 'ScamController@scammershow')->name('show.scam');


Route::get('/tuitions','TuitionsController@create');
Route::post('/store/tuitions', 'TuitionsController@store')->name('store.tuitions');
Route::get('/tuitionlist', 'TuitionsController@show')->name('show.tuitions');
Route::get('delete/tuitions/{id}', 'TuitionsController@destroy')->name('destroy.tuitions');
Route::get('edit/tuitions/{id}', 'TuitionsController@edit');
Route::get('update/tuitions/{id}', 'TuitionsController@update');
Route::get('/applications', 'AdminController@applications')->name('show.applications');
Route::get('/tuitioncheck', 'TutorController@tuitionshow');
Route::post('/search', 'TutorController@search')->name('search');
//admin




//student
Route::get('/studentpanel', 'TuitionsController@studentpanel');
Route::get('/mytuitions', 'TuitionsController@search');
Route::get('/tuitionview', 'TuitionsController@mytuitions')->name('mytuitions');

Route::get('/tutorpanel','TutorController@index');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
// ->middleware('auth')

Route::get('/apply','TutorController@apply');
Route::post('/store/apply', 'TutorController@tutorstore')->name('store.apply');
Route::get('/applyview', 'TutorController@tutorview')->name('show.apply');
Route::get('/syllabusview', 'TutorController@syllabusview')->name('view.syllabus');
Route::get('/scammerview', 'TutorController@scammerview')->name('view.scammer');

