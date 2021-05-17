<?php

declare(strict_types=1);

$pdo = require 'connect.php';

$sql = 'delete from iup_vendedor where id= ?';

$id = 63;

$prepare = $pdo->prepare($sql);

$prepare->bindParam(1, $id);

$prepare->execute();

echo $prepare->rowCount();

if($prepare->rowCount()==1){
    echo 'Deletado o registro com id: '. $id;
}
