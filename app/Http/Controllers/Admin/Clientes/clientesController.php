<?php

namespace App\Http\Controllers\Admin\Clientes;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin\Clientes;

class clientesController extends Controller
{
    public function index()    
    {
        $dados = new Clientes();    
        $dados = $dados->index();

        $dados = ['dados' => $dados];
      
        return view('admin.clientes.listagem')->with($dados);
    }
}
