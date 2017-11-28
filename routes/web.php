<?php

Route::prefix('admin')->group(function() {

    /* ##### ROTAS SEM AUTH ###### */
    Route::get('/login','Auth\AdminLoginController@login')->name('admin.login');
    Route::post('/login','Auth\AdminLoginController@Postlogin')->name('admin.login.submit');
    Route::get('/logout','Auth\AdminController@logout')->name('admin.logout');
    Route::get('/','Auth\AdminController@index')->name('admin.dashboard');
  });


  Route::get('/inicio', function () {
    return view('inicio');
});


Route::get('/', function () {
    return view('inicio');
});


Route::get('/logout','Auth\LoginController@logout')->name('logout');

Route::any('/abrirconta','Auth\RegisterController@create')->name('abrirconta');

Route::group(['middleware' => 'web'], function(){
    Route::auth();  
       
    Route::get('/cliente', function () {
        return view('iniciocliente');
    });
               
    Route::get('/saldo', function () {
        return view('saldo');
    });
    
    Route::get('/extrato', function () {
        return view('extrato');
    });
    
    Route::get('/deposito', function () {
        return view('deposito');
    });
    
    Route::get('/resgate', function () {
        return view('resgate');
    });
  
});







