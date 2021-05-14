<?php

//campos preenchidos exceto o nome
$usuario = ['codigo' => 1, 'nome' => '', 'idade' => 31];

// função que retorna um boleano
function validarUsuario($usuario)
{
    // verifica se os campos estão vazios
    if(empty($usuario['codigo']) || empty($usuario['nome']) || empty($usuario['idade']))
    {
        //lança uma exceção
        throw new Exception("Campos obrigatorios não preenchidos");
    }

    return true;
}

//try é uma tratativa
try{
    $status = validarUsuario($usuario);

 //catch captura a exceção que foi lançada na função validarUsuario. se não for verdadeiro mostra mensagem de erro que foi definida no throw new Exception("Campos ...
}catch (Exception $ex) {
    echo $ex->getMessage();

    //após mostrado o catch o código continua sendo executado, caso queira finalizar basta usar a função di();
    //die();

//finally vai mostrar mensagem idenpendente de passar no try ou catch
} finally {
    echo 'Status da operação: '. (int)$status; //cast
}
