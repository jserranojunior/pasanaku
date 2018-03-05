<?php

namespace App\Http\Controllers\Admin\Clientes;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin\Clientes;
use App\Http\Controllers\Admin\Header\notificacoesController;

class clientesController extends Controller
{

    public function edit($id){

        $notificacao = new notificacoesController();
        $notificacao = $notificacao->notification();    

        $dados = array('notificacoes' =>  $notificacao);


        return view('admin.clientes.editar')->with($dados);
    }


    public function index()    
    {
        $notificacao = new notificacoesController();
        $notificacao = $notificacao->notification();

        $dados = new Clientes();    
        $dados = $dados->index();

        $dados = array('dados' => $dados, 'notificacoes' =>  $notificacao);
      
        return view('admin.clientes.listagem')->with($dados);
    }
}
