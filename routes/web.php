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
    return redirect("login");
});


Auth::routes();
Auth::routes(['register' => false]);

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware'=> ['auth','admin']], function() {

    Route::get('/table', 'HomeController@table')->name('home');

    Route::get('/dept', 'HomeController@dept')->name('home');
    Route::post('deptsubmit','DeptController@create');
    Route::get('sem','SemController@create')->name('home');
    Route::post('semsubmit','SemController@insert');
    Route::get('sub','SubjectController@view')->name('home');
    Route::post('deptchk','SubjectController@chk');
    Route::get('debug','SubjectController@chk');
    Route::post('subsubmit','SubjectController@submit');
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/addstudent', 'ExcelToDbsController@importExportView')->name('exceltodbs');
    Route::get('export', 'ExcelToDbsController@viewstudent')->name('viewstudent');
    Route::get('importExportView', 'ExcelToDbsController@importExportView');
    Route::post('studentsubmit', 'ExcelToDbsController@addstudent')->name('studentsubmit');
    Route::post('/check', 'ExcelToDbsController@check')->name('check');
    

});

Route::get('/temp',function(){
    return view("error");
} );
Route::get('/viewsem{id}','semcontroller@viewsem');
Route::get('/viewsub{id}','semcontroller@viewsub');
Route::get('/staff',function() {
    return view('staff.stafflanding');
});
Route::get('/profile', 'HomeController@profile')->name('home');
Route::get('/check',function(){
    return view('advisor.asv');
});
Route::post('/select', 'SubjectController@det1');
Route::post('/select2', 'SubjectController@det2');

Route::get('/staffsel','SubjectController@semlist');

Route::post('/stafftest','SubjectController@semdetails');
Route::post('/semchk','SubjectController@chk');
