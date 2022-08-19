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
    return view('welcome');
});

Route::get('candidate', 'App\Http\Controllers\CandidateController@index');
Route::get('candidate/{id}','App\Http\Controllers\SupporterController@add');

Route::post('add-supporter', 'App\Http\Controllers\SupporterController@addsupporter')->name('add-supporter');

Route::get('/admin', 'App\Http\Controllers\CandidateController@list');

Route::get('/calon', function () {
    return view('calon.listcalon');
});

Route::get('/add', function () {
    return view('addpilihan');
});

Route::get('provinces', 'App\Http\Controllers\DependentDropdownController@provinces')->name('provinces');

Route::get('cities', 'App\Http\Controllers\DependentDropdownController@cities')->name('cities');

Route::get('districts', 'App\Http\Controllers\DependentDropdownController@districts')->name('districts');

Route::get('villages', 'App\Http\Controllers\DependentDropdownController@villages')->name('villages');
