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

Auth::routes();

Route::get('/', function () {
    return view('iniciocliente');
});

Route::get('/cliente', function () {
    return view('iniciocliente');
});

Route::get('/adm', function () {
    return view('inicioadm');
});

Route::get('/saldo', function () {
    return view('saldo');
});

Route::get('/extrato', function () {
    return view('extrato');
});