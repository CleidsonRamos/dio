<?php
    //inicia sessão. Tem que deixar sempre no inicio do script
    session_start();

    include "servicos/mensagemSessao.php";
    include "servicos/validacao.php";
    include "servicos/categoriaCompetidor.php";

?>

<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>

<body>
    <p>Formulario para inscrição de comptetidores</p>

    <!---Quando é enviado através do metodo GET e transmetido através da URL--->
    <form action='script.php' method='post'>
        <?php

            $mensagemSucesso = obterMensagemSucesso();
            if (!empty($mensagemSucesso)) {
                echo $mensagemSucesso;
            }

            //operador ternario
            //(Condição) ? <instruções para verdadeiro> : <instruções para falso>;
            $mensagemErro = obterMensagemErro();
            //se mensagem de erro não estiver vazio
            if (!empty($mensagemErro)) {
                echo $mensagemErro;
            }
        ?>
        <p>Nome: <input type='text' name='nome' /></p>
        <p>Idade: <input type='text' name='idade' /></p>
        <p><input type='submit' value='Salvar' /></p>

    </form>
</body>

</html>