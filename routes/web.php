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
    return view('index');
});
Route::get('/list-yayasan', function () {
    return view('list-yayasan');
});
Route::get('/yayasan/{id?}', function () {
    return view('yayasan');
});
Route::get('/test', function () {
    return view('tes');
});
