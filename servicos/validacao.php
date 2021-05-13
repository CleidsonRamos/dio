<?php

//reforça para o script receber uma tipagem mais forte
//declare('strict_type = 1')

// vai receber nome e retornar um booleano
function validarNome(string $nome) : bool
{
    //verifica se o nome não esta vazio
    if (empty($nome)) {
        
        setarMensagemErro(mensagem: 'O nome não pode ser vazio');
        return false;
    }

    // verifica a quantidade caracteres
    else if (strlen($nome) < 3) {

        setarMensagemErro(mensagem: 'O nome não pode ter menos de 3 caracteres');
        return false;
    }

    // verifica a quantidade caracteres
    else if(strlen($nome) > 40) {

        setarMensagemErro(mensagem: 'O nome é muito extenso');
        return false;
    }
    return true;
}
function validarIdade(string $idade) : bool
{

    // verifica se não é numerico
    if (!is_numeric($idade)) {

        setarMensagemErro(mensagem: 'A idade tem que ser numerico');
        return false;
    }

    return true;
}