<?php

Route::prefix('admin')->group(function() {
    /* ##### ROTAS SEM AUTH ###### */
    Route::get('/login','Auth\AdminLoginController@login')->name('admin.login');
    Route::post('/login','Auth\AdminLoginController@Postlogin')->name('admin.login.submit');
    Route::get('/logout','Auth\AdminController@logout')->name('admin.logout');
    Route::get('/sair','Auth\AdminController@logout')->name('admin.sair');
    Route::get('/','Auth\AdminController@index')->name('admin.dashboard');
    
  });

/* ADMINISTRAÇÃO */
  Route::group(['as' => 'admin.','prefix' => 'admin/clientes', 'middleware' => ['auth:admin']],function(){
  Route::get('/','Admin\Clientes\clientesController@index')->name('admin.clientes');
});

/* LOGIN */
Route::get('/logout','Auth\LoginController@logout')->name('logout');

/* ABRIR CONTA */
Route::any('/abrirconta','Auth\RegisterController@create')->name('abrirconta');

/* INICIO */
Route::get('/inicio', function () {return view('inicio');});
Route::get('/', function () {return view('inicio');});


/* CLIENTES */
/* ADMINISTRAÇÃO */
Route::group(['as' => 'usuario.', 'middleware' => ['auth:web']],function(){
  Route::get('/extrato/teste', 'User\Contas\extratoController@index'); 
});


Route::group(['middleware' => 'web'], function(){
    Route::auth();         
    Route::get('/cliente', function () {return view('iniciocliente');});               
    Route::get('/saldo', function () { return view('saldo'); });    
    Route::get('/extrato', function () {return view('extrato');});   
    
    

    Route::get('/deposito', function () {return view('deposito');});    
    Route::get('/resgate', function () {return view('resgate');});  
});







