<?php

namespace App\Models\User;

use Illuminate\Database\Eloquent\Model;
use DB;

class Saldo extends Model
{
    public function index(){

        $id = auth()->user()->id;          
        
        $saldo = DB::table('saldos')
        ->where('id_user', $id)
        ->take(1)
        ->orderBy('id', 'desc')
        ->get();

        foreach($saldo as $item){
            $item->valor = number_format($item->valor, 2, '.', ',');
        }

        return($saldo);        
    }

    
}
