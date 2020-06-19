<?php

use Illuminate\Support\Facades\DB;
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
    $specialities = DB::table('specialities')->get();
    return view('welcome', compact('specialities'));
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/students/{id}', 'StudentController@students')->name('students');
Route::get('/studentInfo/{id}', 'StudentController@studentInfo')->name('studentInfo');
