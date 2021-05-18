<?php

require_once "vendor/autoload.php";

use cleidson\digitalcep\Search;

$busca = new Search;

$resultado = $busca->getEnderecoCEP('74766030');
print_r($resultado);