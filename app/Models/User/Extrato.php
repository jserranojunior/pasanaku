<?php

namespace App\Models\User;
use DB;
use Illuminate\Database\Eloquent\Model;

class Extrato extends Model
{
    public function index(){

        $id = auth()->user()->id;        
        $select = DB::table('transacoes')
        ->select('valor', 'data_efetuada', 'tipo')
        ->where('id_user', $id)
        ->Where('pagamento_feito', true)
        ->get();       

        $total = 0;
        foreach($select as $dados){
            /* FAZENDO SOMA DE VALORES PARA O TOTAL */
            $valor = $dados->valor;
            $tipo = $dados->tipo;

            if($dados->tipo == "deposito"){
            $total += $valor;
            $dados->tipo = "+";
            }else{
                $total -= $valor;    
                $dados->tipo = "-";
            }

            /* MUDANDO FORMATO DA DATA */
            $dados->data_efetuada = date('d/m/Y', strtotime($dados->data_efetuada));
        }
        $dados = ['dados' =>  $select, 'total' => $total];
        return($dados);
    }
}
