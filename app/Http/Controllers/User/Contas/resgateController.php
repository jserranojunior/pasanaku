<?php

namespace App\Http\Controllers\User\Contas;
use App\Models\User\Resgate;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class resgateController extends Controller
{
    public function index()
    {
        $dataAtual = date('Y-m-d');       
        $dados = array('dataAtual' => $dataAtual);        
        return view('resgate')->with($dados);
    }

    public function create(Request $request){
        $dados = new Resgate();
        $dados = $dados->create($request);
        return redirect('/resgate');
    }
}
