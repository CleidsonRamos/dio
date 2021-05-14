<?php

//força a tipagem
declare (strict_types=1);

$pdo = null;

try{
    $pdo = new PDO('mysql:host=127.0.0.1; dbname=gestao', 'root','');
    echo 'Conectado';
}catch (Exception $ex){
    echo $ex->getMessage();
    die(); //finaliza a conexão em caso de erro
}
return $pdo;
