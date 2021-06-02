<button type="button" class="btn btn-primary btn-round" data-toggle="modal" data-target="#exampleModal">
  Cadastrar &nbsp
  <span class="material-icons">
    person_add
  </span>
</button>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cadastro de Vendedores</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form action='inserirvendedor.php' method='post'>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputEmail4">Nome</label>
                <input name="nome" type="id" class="form-control" id="inputEmail4" placeholder="">
              </div>
              <div class="form-group col-md-6">
                <label for="inputPassword4">Email</label>
                <input name="email" type="text" class="form-control" id="inputPassword4" placeholder="">
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputEmail4">Empresa</label>
                <input name="id_empresa" type="id" class="form-control" id="inputEmail4" placeholder="">
              </div>
              <div class="form-group col-md-6">
                <label for="inputPassword4">Unidade</label>
                <input name="id_unidade" type="text" class="form-control" id="inputPassword4" placeholder="">
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputEmail4">Centro de Resultado</label>
                <input name="id_centro_de_resultado" type="id" class="form-control" id="inputEmail4" placeholder="">
              </div>
              <div class="form-group col-md-6">
                <label for="inputPassword4">Usuario</label>
                <input name="id_usuario" type="text" class="form-control" id="inputPassword4" placeholder="">
              </div>
              <div class="form-group col-md-6">
                <label for="inputPassword4">Local de Estoque</label>
                <input name="id_local_estoque" type="text" class="form-control" id="inputPassword4" placeholder="">
              </div>
            </div>
            <div class="form-group">
              <div class="form-check">
                <label class="form-check-label">
                  <input name="status" class="form-check-input" type="checkbox" value="1" checked>
                  Ativado
                  <span class="form-check-sign">
                    <span class="check"></span>
                  </span>
                </label>
              </div>
            </div>
          </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary btn-round" data-dismiss="modal">
          Fechar  &nbsp
          <span class="material-icons">
            close
            </span>
        </button>
        <button type="submit" class="btn btn-primary  btn-round">
          Salvar  &nbsp
        <span class="material-icons">
          save
        </span>
        </button>
       </form>
      </div>
    </div>
  </div>
</div>
