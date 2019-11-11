<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Usuario extends Controller
{
    public function cadastrar(){
        echo '10';
    }

    public function salvar(request $request){
        dd($request->all());
    }
}
