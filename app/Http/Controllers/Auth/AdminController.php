<?php

namespace App\Http\Controllers\Auth;
use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{

    public function __construct(){
        $this->middleware('auth:admin');
    }
    
    public function index(){
      
        return view('inicioadm');
    }

    public function logout()
    {       
        auth()->guard('admin')->logout();
        return redirect('/inicio');
    }
   
}
