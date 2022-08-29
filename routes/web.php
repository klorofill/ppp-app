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

Route::get('/', function(){
    return view('home');
});

// UNTUK USER
Route::group(['prefix' => 'user'], function() {

    Route::get('/provinsi', 'App\Http\Controllers\WilayahController@getprovinsi');

    Route::get('/kabupaten', 'App\Http\Controllers\DapilController@getdapil')->name('suportter');

    Route::get('/dapil/{id}', 'App\Http\Controllers\DivisiController@getdivisi');

    Route::get('/dapil/{id}/{divisi}', 'App\Http\Controllers\DapilController@getdapil')->name('post.show');

    Route::get('/candidate/{id}', 'App\Http\Controllers\SupporterController@supportterform')->name('candidate');

    Route::post('/add-supporter', 'App\Http\Controllers\SupporterController@addsupporter')->name('add-supporter');

    Route::get('/cetak/{idcandidate}/{nik}', 'App\Http\Controllers\SupporterController@cetak_pdf');

});
Route::get('user/dapil', 'App\Http\Controllers\DapilController@getdapil');
Route::get('user/dapil/{id}', 'App\Http\Controllers\DivisiController@getdivisi');
Route::get('user/dapil/{id}/{divisi}', 'App\Http\Controllers\CandidateController@getcandidate')->name('post.show');


Route::get('/divisi', function () {
    return view('divisi');
});

Route::get('candidate', 'App\Http\Controllers\CandidateController@index');
Route::get('candidate/{id}','App\Http\Controllers\SupporterController@add');

Route::post('add-supporter', 'App\Http\Controllers\SupporterController@addsupporter')->name('add-supporter');

Route::group(['prefix' => 'admin'], function() {
    Route::get('candidate', 'App\Http\Controllers\CandidateController@list');
    Route::get('add-candidate', 'App\Http\Controllers\CandidateController@addcandidate');
});

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
