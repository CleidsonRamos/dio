<?php

namespace App\Http\Controllers;

use App\Models\Models\Usuario as ModelsUsuario;
use Illuminate\Http\Request;

class Usuario extends Controller
{
    public function cadastrar()
    {
        //dd(Hash::make('123'));
        return view('usuario.cadastro');// acessa o arquivo que esta na pasta views/usuario/cadastro.blade.php
    }

    public function salvar(Request $request)
    {
        $request->validate([
            "nome" => "required",
            "email" => "required|email",
            "senha" => "required|min:8",
            
        ]);

        dd($request->all());

        ModelsUsuario::cadastrar($request);

        if(ModelsUsuario::cadastrar($request)){
            return view('usuario.sucesso');
        } else{
            echo "Ops! falha ao guardar no Banco de dados";
        }
        
    }    
}

/*
para criar um controller abra o terminal:
php artisan make:controller Usuario

colocar rotas e na pasta app/routes/web.php

para fazer teste no laravel digite no terminal
php artisan serve

e acesse o endereço http://127.0.0.1:8000
*/