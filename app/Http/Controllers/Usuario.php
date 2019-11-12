<?php

namespace App\Http\Controllers;

use App\Model\Usuario as UsuarioModel;
use Illuminate\Http\Request;
use Hash;

class Usuario extends Controller
{
    public function cadastrar(){
        return view('usuario.cadastro');
    }

    public function salvar(request $request){
        $request->validate([
            "nome" => "required",
            "email" => "required|email",
            "senha" => "min:5",
        ]);

        if(UsuarioModel::cadastrar($request))
            return view('usuario.sucesso');
        
        echo 'Ops! Falhou ao cadastrar!';    

    }
}
