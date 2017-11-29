<?php

namespace App\Models\Admin;
use DB;

use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
    public function index()
    {
        $select = DB::table('users')
        ->select('name', 'email', 'cpf')
        ->get();

        return($select);
    }
}
