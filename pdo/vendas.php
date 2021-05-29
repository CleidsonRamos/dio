<?php

declare(strict_types=1);

include 'view/head.php';
include 'view/sidebar.php';

$pdo = require 'connect.php';

$sql = 'select mov.id id, ven.nome vendedor, mov.data_negociacao data_negociacao, par.nome cliente, neg.descricao negociação, uni.descricao unidade, format(mov.valor_total,2,"de_DE") as valor_total
        from iup_movimentacao mov,
        iup_vendedor ven,
        iup_parceiro par,
        iup_tipo_de_negociacao neg,
        iup_unidade uni
        where mov.id_tipo_movimentacao = 1
        and ven.id = mov.id_vendedor
        and mov.id_parceiro = par.id
        and mov.id_tipo_de_negociacao = neg.id
        and mov.id_unidade = uni.id
        order by mov.id desc
        limit 50';


        $sql_valorTotal = $pdo->prepare('select format(sum(valor_total),2)
        from 
        (select mov.valor_total as valor_total 
          from iup_movimentacao mov,
          iup_vendedor ven,
          iup_parceiro par,
          iup_tipo_de_negociacao neg,
          iup_unidade uni
          where mov.id_tipo_movimentacao = 1
          and ven.id = mov.id_vendedor
          and mov.id_parceiro = par.id
          and mov.id_tipo_de_negociacao = neg.id
          and mov.id_unidade = uni.id
          order by mov.id desc
          limit 50) as sub');

$sql_valorTotal->execute();
$total = $sql_valorTotal->fetchColumn();


$sql_media = $pdo->prepare('select format(avg(valor_total),2)
                    from 
                    (select mov.valor_total as valor_total 
                      from iup_movimentacao mov,
                      iup_vendedor ven,
                      iup_parceiro par,
                      iup_tipo_de_negociacao neg,
                      iup_unidade uni
                      where mov.id_tipo_movimentacao = 1
                      and ven.id = mov.id_vendedor
                      and mov.id_parceiro = par.id
                      and mov.id_tipo_de_negociacao = neg.id
                      and mov.id_unidade = uni.id
                      order by mov.id desc
                      limit 50) as sub');

$sql_media->execute();
$media = $sql_media->fetchColumn();

?>

<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title ">Tabela de vendas</h4>
            <p class="card-category">Valor total das vendas R$ <?php echo $total; ?></p>
            <p class="card-category">Media das vendas R$ <?php echo $media; ?></p>
            
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-hover">
                <thead class=" text-primary">
                  <th>ID</th>
                  <th data-toggle="tooltip" data-placement="bottom" title="Código da Unidade do vendedor">Vendedor</th>
                  <th>Data Negociação</th>
                  <th>Cliente</th>
                  <th>Negociação</th>
                  <th>Unidade</th>
                  <th>Valor Total</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($pdo->query($sql) as $row) : ?>
                    <tr>
                      <td><?php echo $row["id"]; ?></td>
                      <td><?php echo $row["vendedor"]; ?></td>
                      <td><?php echo $row["data_negociacao"]; ?></td>
                      <td><?php echo $row["cliente"]; ?></td>
                      <td><?php echo $row["negociação"]; ?></td>
                      <td><?php echo $row["unidade"]; ?></td>
                      <td><?php echo $row["valor_total"]; ?></td>
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

<?php
include 'view/footer.php';