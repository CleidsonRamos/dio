<?php

//força a tipagem
declare(strict_types=1);

//como o connect.php retorna o PDO, então é armazenado na variavel $PDO.
$pdo = require 'connect.php';

$sql = 'SELECT * FROM IUP_VENDEDOR';

echo '<h3>Vendedor: </h3>';

foreach ($pdo->query($sql) as $key=> $value){
   echo  
        ' id: '. $value['id'].
        ' id_unidade: '. $value['id_unidade'].
        ' id_empresa: '. $value['id_empresa'].
        ' id_centro_de_resultado: '. $value['id_centro_de_resultado'].
        ' id_usuario: '. $value['id_usuario'].
        ' nome: '. $value['nome'].
        ' email: '. $value['email'].
        ' status: '. $value['status'].
        ' id_local_estoque: '. $value['id_local_estoque']. '<br><br>' ;
}