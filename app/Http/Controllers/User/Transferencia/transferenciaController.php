<?php

namespace App\Http\Controllers\User\Transferencia;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class transferenciaController extends Controller
{
    public function index(){
        return view('user.transferencia.index');
    }
}
