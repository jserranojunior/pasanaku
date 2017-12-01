<?php

namespace App\Models\Admin;
use DB;

use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
    public function index()
    {
        $select = DB::table('users')
        ->select('name', 'email', 'cpf', 'data_nascimento', 'celular')
        ->get();

        foreach ($select as $sel){
            if($sel->celular == 0){
                $sel->celular = null;
            }
            $sel->data_nascimento = date('d/m/Y', strtotime($sel->data_nascimento));
            if($sel->cpf == 0){
                $sel->cpf = null;
            }
        }

        return($select);
    }
}
