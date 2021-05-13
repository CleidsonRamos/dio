<?php

/* A função defineCategoriaCompetidor vai receber o $nome e a $idade
que foi enviado do script.php o script.php só conseguiu enviar por causa do include*/
function defineCategoriaCompetidor(string $nome, string $idade)
{
    /*Cria um array vazio e depois é adcionado as categorias*/
    $categorias = [];
    $categorias[] = 'infantil';
    $categorias[] = 'adolescente';
    $categorias[] = 'adulto';

    //verifica se o validar nome e idade são verdadeiros
    if (validarNome($nome) && validarIdade($idade))
    {
        removerMensagemErro();//caso tenha mensagem de erro vai ser removida

        if($idade >= 6 && $idade <= 12)
        {
            for($i = 0; $i<= count($categorias); $i++)
            {
                if($categorias[$i] == 'infantil')
                {
                    setarMensagemSucesso(mensagem:"O nadador ".$nome." compete na categoria ".$categorias[$i]);
                    return null;
                }
            }
        }
        
        else if($idade >= 13 && $idade <= 18)
        {
            for($i = 0; $i<= count($categorias); $i++)
            {
                if($categorias[$i] == 'adolescente')
                {
                    setarMensagemSucesso(mensagem:"O nadador ".$nome." compete na categoria ".$categorias[$i]);
                    return null;
                }
            }
        }
        
        else if($idade >= 19)
        {
            for($i = 0; $i<= count($categorias); $i++)
            {
                if($categorias[$i] == 'adulto')
                {
                    setarMensagemSucesso(mensagem:"O nadador ".$nome." compete na categoria ".$categorias[$i]);
                    return null;
                }
            }
        }
    }
    else
    {
        removerMensagemSucesso();
        return obterMensagemErro();
    }
}