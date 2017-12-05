<?php

namespace App\Http\Controllers\User\Contas;
use App\Models\User\Contas;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class extratoController extends Controller
{
    public function index(){
        $dados = new Contas();
        $dados = $dados->extrato();

        

        return view('extratoteste')->with($dados);
    }
}
