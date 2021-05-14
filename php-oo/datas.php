<?php
/*
    D texto 3 letras
    d dia do mes
    j dia do mes sem o zero
    l dia da semana texto completo
    w numero da semana no ano
    m mes numero
    M nome do mes 3 digitos
    n numero do mes
    L verifica se esta no ano bisexto: 1 = bissexto; 0 = Não bissexto
    Y ano completo
    y ano dois digitos
    H 24horas
    h 12horas
    i minutos
    s segundos

    https://www.php.net/manual/pt_BR/function.date
    https://www.php.net/manual/pt_BR/class.datetime
*/

echo date('d/m/Y');
echo '<br><br>';
echo date('D-M-y');

echo '<br><br>';

$data = new DateTime();

var_dump($data);

echo '<br><br>';


echo $data->format('d/m/y H:i:s');

echo '<br><br>';

$data2 = new DateTime('2021-05-13 00:00:00');
echo $data2->format('Y-m-d H:i:s');
echo '<br><br>';
/*
    P7Y5M4DT4H3M2S
    vai acresentar:
    P (periodo)
    7Y (7 anos)
    5M (5 meses)
    4D (4 dias)
    Time
    4H (4 horas)
    3M (3 minutos)
    2S (2 segundos)

*/


$data2->add(new DateInterval('P7Y5M4DT4H3M2S')); //acrescenta

echo $data2->format('Y-m-d H:i:s');
echo '<br><br>';

$data2->sub(new DateInterval('P7Y5M4DT4H3M2S')); //subtrai

echo $data2->format('Y-m-d H:i:s');
echo '<br><br>';