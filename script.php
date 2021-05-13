<?php

/* para iniciar a sessão tem que estar sempre no inicio do script
a sessão é utilizada por exemplo quando o usuário abre várias abas
do mesmo sistema sem ter que ficar fazendo o login novamente */
session_start();

// O “include” vai sempre partir de onde ele se encontra hoje, de onde o arquivo “script” está para frente.
include "servicos/mensagemSessao.php";
include "servicos/validacao.php";
include "servicos/categoriaCompetidor.php";

// $_POST vai pegar os dados do formulario index.php através do name
$nome = $_POST['nome']; 
$idade = $_POST['idade'];

/*depois do $_POST amarzernar nas variaveis $nome $idade
é passado por parametro para a função defineCategoriaCompetidor*/
defineCategoriaCompetidor($nome, $idade);

header('Location: index.php');