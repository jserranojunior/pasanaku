<?php

namespace App\Models\User;

use Illuminate\Database\Eloquent\Model;
use DB;

class Deposito extends Model
{
    public function index()
    {
        $dados = array("valor" => 17);
        return($dados);
    }

    public function create($request)
    {
        $request->valor = floatval($request->valor);         
        
        $dataAtual = date('Y-m-d');
        $dataCompleta = date('Y-m-d h:i:s', time());
        $id = auth()->user()->id;  

        $dados = array(
          'id_user' => $id,
          'valor' => $request->valor,
          'tipo' => 'deposito',
          'data_agendada' => $request->data,
          'data_efetuada' => $dataAtual,
          'pagamento_feito' =>false,
          'created_at' => $dataCompleta,
          'updated_at' => $dataCompleta,  
        );

        DB::table('transacoes')->insert($dados);

    }
}
