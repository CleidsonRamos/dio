<?php

use PHPUnit\Framework\TestCase;
use cleidson\digitalcep\Search;


class SearchTest extends TestCase
{
    //toda função de test tem que começar com a palavra test
    public function testGetEnderecoCEP()
    {
        $resultado = new Search;

        $resultado = $resultado->getEnderecoCEP('74766030');

        print_r($resultado);

        $resultado_esperado = [
            "cep" => "74766-030",
            "logradouro" => "Rua GR4",
            "complemento" =>"",
            "bairro" => "Loteamento Grande Retiro",
            "localidade" => "Goiânia",
            "uf" => "GO",
            "ibge" => "5208707",
            "gia" => "",
            "ddd" => "62",
            "siafi" => "9373"
        ];

        //verifica se o resultado é igual
        $this->assertEquals($resultado_esperado, $resultado);
        exit;
    }
}
/* para realizar o test coloque no terminal
   vendor/bin/phpunit tests/ --colors=always

   para gerar o code covered coloque no terminal
   vendor/bin/phpunit tests/ --colors=always --testdox-text=report-tests.txt
   vai gerar o arquivo report-tests.txt nele vai ter detalhes das falhas caso tenha

   vendor/bin/phpunit tests/ --colors=always --coverage-html

*/