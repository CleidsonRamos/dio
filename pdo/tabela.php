
      <div class="content">

<?php include 'view/formvendedor.php';?>

  <div class="container-fluid">
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
                      <td class="row"> <button type="button" class="btn btn-primary btn-fab btn-fab-mini btn-round" data-toggle="modal" data-target="#modalEditar" data-placement="bottom" title="Editar vendedor(a)">
                        <span class="material-icons">
                          edit_note
                        </span>
                        </button><button type="button" class="btn btn-warning btn-fab btn-fab-mini btn-round" data-toggle="modal" data-target="#modalDeletar" data-placement="bottom" title="Deletar vendedor(a)">
                        <span class="material-icons">
                          delete_forever
                        </span>
                      </button> 
                     </td>
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

<!-- Modal para deletar-->
<div class="modal fade" id="modalDeletar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Deletar vendedor(a)</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Tem certeza que deseja deletar? </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-danger">
          Deletar
          <span class="material-icons">
              delete
            </span>
        </button>
      </div>
    </div>
  </div>
</div>
<!--Fim do modal para deletar-->

<?php
include 'view/footer.php';
?>
