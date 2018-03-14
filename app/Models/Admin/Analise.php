<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use DB;

class Analise extends Model
{
    public function index(){
        
        $dados = DB::table('transacoes as t')  
        ->select('t.id', 't.valor','t.tipo', 't.data_efetuada','u.name')
        ->leftJoin('users as u', 't.id_user', '=', 'u.id')         
        ->get();

        foreach($dados as $item){
            $item->valor =  number_format($item->valor, 2,',','.');
        }

        return($dados);
      
    }
}
