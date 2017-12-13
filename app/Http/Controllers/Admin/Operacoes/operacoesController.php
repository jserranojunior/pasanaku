<?php

namespace App\Http\Controllers\Admin\Operacoes;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin\Operacoes;
use App\Http\Controllers\Admin\Header\notificacoesController;

class operacoesController extends Controller
{
    public function emitir(Request $request){
        $emitir = new operacoes();
        $emitir = $emitir->emitir();
        

    }

    public function excluir(Request $request){
        return ("EXCLUINDO $request->id");
    }


    public function index(){

        $notificacao = new notificacoesController();
        $notificacao = $notificacao->notification();    

        $operacoes = new Operacoes();
        $operacoes = $operacoes->index();
        $count = 1;
        $dados = array('dados' => $operacoes,'count' => $count, 'notificacoes' =>  $notificacao);

        return view('admin\operacoes\listagem')->with($dados);       
     
    }

    public function edit($id)
    {
        $notificacao = new notificacoesController();
        $notificacao = $notificacao->notification(); 

        $operacoes = new Operacoes();
        $operacoes = $operacoes->edit($id);

        $dados = array('dados' => $operacoes, 'notificacoes' =>  $notificacao);
        

        return view("admin.operacoes.editar")->with($dados);
    }

    
}
