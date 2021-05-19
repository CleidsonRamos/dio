<?php

//chama no composer
require_once "vendor/autoload.php";

use cleidson\digitalcep\Search;

//cria um objeto que é uma instancia da classe
$busca = new Search;

$resultado = $busca->getEnderecoCEP('74766030');

//print_r exibe informação sobre uma variável em uma maneira que é legível para humanos.
print_r($resultado);