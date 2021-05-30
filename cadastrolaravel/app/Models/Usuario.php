<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
use DB;
use Hash;
class Usuario extends Model
{
    use HasFactory;
    protected $connection = 'sqlite';
    protected $table = 'usuario';

    public static function listar(int $limit){
        $sql = self::select([
            "id","nome","email","senha","data_cadastro";
        ])->limit($limite)->get();
        
        dd($sql->toSql(), $request->all());
    }

    public static function cadastrar(Request $request)
    {
        DB::enableQueryLog(); //habilita a gravação de log

        $sql = self::insert([
            "nome" => $request->input('nome'),
            "email" => $request->input('email'),
            "senha" => Hash::make($request->input('senha')),
            "data_cadastro" => new Carbon() //DB::raw é quando é uma função muito especifica do banco que esta trabalhando
                      
            //"data_cadastro" => DB::raw('NOW()') //DB::raw é quando é uma função muito especifica do banco que esta trabalhando
            
        ]);

        dd(DB:getQueryLog()); //pega o resultado do log

        }
}