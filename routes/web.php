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

/*Route::get('/', function () {
    return view('index');
});
Route::get('/page2', function () {
    return view('page2');
});
Route::get('/page3', function () {
    return view('page3');
});*/
Route::get('/controller/tambah','conttest@tambah');//Route::get('ditampilin_di_web','class fx@fx_name');
Route::get('/','conttest@index');
Route::get('/page2','conttest@page2');
Route::get('/page3','conttest@page3');
Route::get('/page4','conttest@page4');