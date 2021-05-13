<?php

function setarMensagemErro(string $mensagem) : void
{
    $_SESSION['mensagem-de-erro'] = $mensagem;
}

// o ? serve para poder retorna string ou null
function obterMensagemErro() : ?string
{
    //verifica se a mensagem esta setada
    if(isset($_SESSION['mensagem-de-erro'])){
        return $_SESSION['mensagem-de-erro'];
    }

    return null;
}

//Quando tem void. O return da função não pode estar associado a uma variável.
function setarMensagemSucesso(string $mensagem) : void
{
    $_SESSION['mensagem-de-sucesso'] = $mensagem;
}

// o ? serve para poder retorna string ou null
function obterMensagemSucesso() : ?string
{
    //verifica se a mensagem esta setada
    if(isset($_SESSION['mensagem-de-sucesso'])){
        return $_SESSION['mensagem-de-sucesso'];
    }

    return null;
}

function removerMensagemErro() : void
{
    // se a mensagem estiver setada então vai remover usando o unset
    if(isset($_SESSION['mensagem-de-erro'])){
        unset($_SESSION['mensagem-de-erro']);
    }
}

function removerMensagemSucesso() : void
{
    // se a mensagem estiver setada então vai remover usando o unset
    if(isset($_SESSION['mensagem-de-sucesso'])){
        unset($_SESSION['mensagem-de-sucesso']);
    }
}