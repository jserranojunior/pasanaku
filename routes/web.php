<?php

/* ##### ROTAS DEFAULT ###### */
    Route::get('/logout','Auth\LoginController@logout')->name('logout');    
    Route::any('/abrirconta','Auth\RegisterController@create')->name('abrirconta');    
    Route::get('/inicio', function () {return view('inicio');});
    Route::get('/', function () {return view('inicio');});
/* ##### FIM ROTAS DEFAULT ###### */

/* ##### ROTAS DE AUTH ###### */
  /* AUTH USER */  
    Route::auth();  
  /* AUTH ADMIN */
    Route::prefix('admin')->group(function() {    
      Route::get('/login','Auth\AdminLoginController@login')->name('admin.login');
      Route::post('/login','Auth\AdminLoginController@Postlogin')->name('admin.login.submit');
      Route::get('/logout','Auth\AdminController@logout')->name('admin.logout');
      Route::get('/sair','Auth\AdminController@logout')->name('admin.sair');      
    });
/* ##### FIM ROTAS AUTH ###### */

/* ROTAS ADMINISTRADOR */
Route::group(['as' => 'admin.','prefix' => 'admin'],function(){
  
    Route::group(['middleware' => 'web'], function(){  
      /* INICIAL ADMINISTRADOR  */
      Route::get('/','Auth\AdminController@index')->name('admin.dashboard');

      /* SESSÂO CLIENTES  */
      Route::get('/clientes','Admin\Clientes\clientesController@index')->name('admin.clientes');

      /* OPERAÇÕES  */
      Route::get('/operacoes', 'Admin\Operacoes\operacoesController@index')->name('admin.operacoes');
      Route::any('/operacoes/editar/{id}', 'Admin\Operacoes\operacoesController@edit')->name('admin.operacoes.edit');
      Route::post('/operacoes/emitir', 'Admin\Operacoes\operacoesController@emitir')->name('admin.operacoes.emitir');
      Route::post('/operacoes/excluir', 'Admin\Operacoes\operacoesController@excluir')->name('admin.operacoes.excluir');
    });
  }); 
/* FIM ROTAS ADMINISTRADOR */


/* ROTAS CLIENTES */

Route::group(['as' => 'usuario.', 'middleware' => ['auth:web']],function(){
  
  /* EXTRATO */
  Route::get('/extrato', 'User\Contas\extratoController@index'); 

  /* DEPOSITO */
  Route::get('/deposito', 'User\Contas\depositoController@index');
  Route::post('/deposito/novo', 'User\Contas\depositoController@create');

  /* ARRUMAR */
  Route::get('/cliente', function () {return view('iniciocliente');});               
  Route::get('/saldo', function () { return view('saldo'); });       
  Route::get('/resgate', function () {return view('resgate');}); 

});
/* FIM ROTAS CLIENTES */










