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

Route::get('/upload', 'SyaratPengajuanController@upload');
Route::post('/upload/process', 'SyaratPengajuanController@uploadProcess');
Route::get('/nilai', 'NilaiController@index');
Route::get('/nilai/print', 'NilaiController@print');

Route::get('/jajal', function(){
    return view('nilai_pdf');
});
Route::get('/lembar_bimbingan', function(){
    return view('lembar_bimbingan');
});