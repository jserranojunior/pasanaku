<?php

namespace App\Http\Controllers\User\Contas;
use App\Models\User\Deposito;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class depositoController extends Controller
{
    public function index()
    {
        return view('deposito');
    }

    public function create(Request $request){
        $dados = new Deposito();
        $dados = $dados->create($request);
        return('Depositado com sucesso');
    }
}
