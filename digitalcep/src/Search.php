<?php

namespace cleidson\digitalcep;

class Search
{
    private $url = "https://viacep.com.br/ws/";

    public function getEnderecoCEP(string $cep) : array
    {
        //verifica se todos são numeros
        $cep = preg_replace('/[^0-9]/im','', $cep);
        
        $get = file_get_contents($this->url . $cep ."/json");
        
        return (array) json_decode($get);
    }
}