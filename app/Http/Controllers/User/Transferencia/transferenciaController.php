<?php

namespace App\Http\Controllers\User\Transferencia;
use App\Models\User\Transfer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class transferenciaController extends Controller
{
    public function index(){
        return view('user.transferencia.index');
    }

    public function confirmation(Request $request, Transfer $transfer){    
        $dados = $transfer->confirmation($request);
        return view('user.transferencia.confirmar')->with($dados);
    }
}
