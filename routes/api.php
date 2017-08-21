<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//ROUTE UNTUK YAYASAN
Route::get('/v1/yayasan/{id?}', 'Yayasan@get');
Route::get('/v1/yayasanByKategori/{id?}', 'Yayasan@getByKategori');

//ROUTE UNTUK KATEGORI
Route::get('/v1/kategori/{id?}', 'KategoriController@get');