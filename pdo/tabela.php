<?php
  //força a tipagem
  declare(strict_types=1);

  //como o connect.php retorna o PDO, então é armazenado na variavel $PDO.
  $pdo = require 'connect.php';

  $sql = 'SELECT * FROM IUP_VENDEDOR';

?>

<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lista de vendedores</title>
</head>
<body>
  <h2>Results</h2>

    <table>
      <thead>
        <tr>
          <th>ID</th>
          <th>Unidade</th>
          <th>Empresa Address</th>
          <th>Centro de Resultado</th>
          <th>Usuario</th>
          <th>Nome</th>
          <th>Email</th>
          <th>Status</th>
          <th>Local Estoque</th>          
        </tr>
      </thead>
      <tbody>
      <?php foreach ($pdo->query($sql) as $row) : ?>
        <tr>
          <td><?php echo $row["id"]; ?></td>
          <td><?php echo $row["id_unidade"]; ?></td>
          <td><?php echo $row["id_empresa"]; ?></td>
          <td><?php echo $row["id_centro_de_resultado"]; ?></td>
          <td><?php echo $row["id_usuario"]; ?></td>
          <td><?php echo $row["nome"]; ?></td>
          <td><?php echo $row["email"]; ?> </td>
          <td><?php echo $row["status"]; ?> </td>
          <td><?php echo $row["id_local_estoque"]; ?> </td>          
        </tr>
      <?php endforeach; ?>
      </tbody>
    </table>
</body>
</html>
