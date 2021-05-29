<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Usuario extends Controller
{
    public function cadastrar()
    {
        echo 10;
    }

    public function salvar(Request $request)
    {
        dd($request->all());
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