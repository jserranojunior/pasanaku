<?php

namespace App\Models\Admin;
use DB;
use Illuminate\Database\Eloquent\Model;

class Operacoes extends Model
{ 
    public function index(){
        $select = DB::table('transacoes as T')
        ->join('users as U','T.id_user','=', 'U.id')
        ->where('pagamento_feito', false)
        ->get();

        foreach($select as $item){
            $item->valor = number_format($item->valor, 2, ',','.');
            $item->data_agendada = date('d-m-Y', strtotime($item->data_agendada));
        }
        
            return($select);
    }
}
