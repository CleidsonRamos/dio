<?php

namespace cleidson\digitalcep;

class Search
{
    private $url = "https://viacep.com.br/ws/";

    public function getEnderecoCEP(string $cep) : array
    {
        //verifica se todos são numeros e se não for vai substituir por nada ''
        $cep = preg_replace('/[^0-9]/im','', $cep);
        
        // pega o conteudo da pagina https://viacep.com.br/ws/74766030/json
        $get = file_get_contents($this->url . $cep ."/json");
        
        // retora um json do conteudo
        return (array) json_decode($get);
    }
}