<?php

//força a tipagem das variaveis
declare(strict_types=1);

//como o arquivo connect.php retorna um PDO então armazena neste $pdo daqui
$pdo = require 'connect.php';

//faz a inserção iguam um SQL normal.
$sql = "INSERT INTO iup_vendedor
        (id_unidade, id_empresa, id_centro_de_resultado, id_usuario, nome, email, status, id_local_estoque)
        VALUES(?, ?, ?, ?, ?, ?, ?, ?)";

//variaveis apenas para didatica de inserção o ideal seria fazer um formulario e enviar atraves do $_POST
$id_unidade = 1;
$id_empresa = 1;
$id_centro_de_resultado = 21;
$id_usuario = 57;
$nome = 'Fulano';
$email = 'fulano@teste';
$status = 1;
$id_local_estoque = 2;

//prepare evita problemas com SQLInjetion
$prepare = $pdo->prepare($sql);

/*
    No bindParam() o argumento esperado é uma referência(variável ou constante) 
    não pode ser um tipo primitivo como uma string ou número solto, retorno de função/método.
*/

$prepare->bindParam(1, $id_unidade);
$prepare->bindParam(2, $id_empresa);
$prepare->bindParam(3, $id_centro_de_resultado);
$prepare->bindParam(4, $id_usuario);
$prepare->bindParam(5, $nome);
$prepare->bindParam(6, $email);
$prepare->bindParam(7, $status);
$prepare->bindParam(8, $id_local_estoque);

//executa a instrução SQL
$prepare->execute();

//mostra a quantidade de linhas afetadas, no caso 1
echo $prepare->rowCount();