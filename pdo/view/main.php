<?php
  //força a tipagem
  declare(strict_types=1);

  //como o connect.php retorna o PDO, então é armazenado na variavel $PDO.
  $pdo = require 'connect.php';

  $sql = 'SELECT * FROM IUP_VENDEDOR';

?>

      <div class="content">
        <div class="container-fluid">
        <?php include 'view/formvendedor.php';?>
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Tabela de Vendedores</h4>
                  <p class="card-category">Vendedores</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <thead class=" text-primary">
                        <th>ID</th>
                        <th data-toggle="tooltip" data-placement="top" title="Código da Unidade">Unidade</th>
                        <th>Empresa</th>
                        <th>Centro de Resultado</th>
                        <th>Usuario</th>
                        <th>Nome</th>
                        <th>Email</th>
                        <th data-toggle="tooltip" data-placement="bottom" title="Status 1-Ativo ou 0-Inativo">Status</th>
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
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      