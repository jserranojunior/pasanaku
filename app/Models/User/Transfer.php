<?php

namespace App\Models\User;
use App\Models\Tables\User;
use Illuminate\Database\Eloquent\Model;

class Transfer extends Model
{
    public function __construct(User $users){
        
        $this->users = $users;
       // dd($this->users);
    }

    public function confirmation($request){
        $request->cpf  =  preg_replace("/[^0-9]/", "", $request->cpf);

        //dd($request->valor);
        $users =  $this->users->where('cpf', '=', $request->cpf)->get();
        $name = null;
        foreach($users as $user){
           $name = $user->name; 
       }

       $dados = array('cpf' => $request->cpf,
                    'valor' => $request->valor,
                    'tipo_conta' => $request->tipo_conta,
                    'nome' => $name,
                );

       return($dados);
    }
}
