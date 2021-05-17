<?php

declare(strict_types=1);

//como o arquivo connect.php retorna um PDO então armazena neste $pdo daqui
$pdo = require 'connect.php';

//faz a inserção iguam um SQL normal.
$sql = "update iup_vendedor set nome = ?, email = ? where id = ?";

//variaveis apenas para didatica de inserção o ideal seria fazer um formulario e enviar atraves do $_POST
$id = 60;
$nome = 'Fulano';
$email = 'fulano@teste';

//prepare evita problemas com SQLInjetion
$prepare = $pdo->prepare($sql);

/*
    No bindParam() o argumento esperado é uma referência(variável ou constante) 
    não pode ser um tipo primitivo como uma string ou número solto, retorno de função/método.
*/

$prepare->bindParam(1, $nome);
$prepare->bindParam(2, $email);
$prepare->bindParam(3, $id);

//executa a instrução SQL
$prepare->execute();

//mostra a quantidade de linhas afetadas, no caso 1
echo $prepare->rowCount();
