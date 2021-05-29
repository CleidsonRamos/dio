<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Cadastrar
</button>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cadastro de Vendedores</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputEmail4">Nome</label>
                <input type="id" class="form-control" id="inputEmail4" placeholder="nome">
              </div>
              <div class="form-group col-md-6">
                <label for="inputPassword4">Email</label>
                <input type="text" class="form-control" id="inputPassword4" placeholder="Email">
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputEmail4">Empresa</label>
                <input type="id" class="form-control" id="inputEmail4" placeholder="Empresa">
              </div>
              <div class="form-group col-md-6">
                <label for="inputPassword4">Unidade</label>
                <input type="text" class="form-control" id="inputPassword4" placeholder="Unidade">
              </div>
            </div>

            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputEmail4">Centro de Resultado</label>
                <input type="id" class="form-control" id="inputEmail4" placeholder="Centro de Resultado">
              </div>
              <div class="form-group col-md-6">
                <label for="inputPassword4">Usuario</label>
                <input type="text" class="form-control" id="inputPassword4" placeholder="Usuario">
              </div>
              <div class="form-group col-md-6">
                <label for="inputPassword4">Local de Estoque</label>
                <input type="text" class="form-control" id="inputPassword4" placeholder="Local de Estoque">
              </div>
            </div>

            <div class="form-group">
              <div class="form-check">
                <label class="form-check-label">
                  <input class="form-check-input" type="checkbox" value="">
                  Ativado
                  <span class="form-check-sign">
                    <span class="check"></span>
                  </span>
                </label>
              </div>
            </div>
            <button type="submit" class="btn btn-primary">Salvar</button>
          </form>
          </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="button" class="btn btn-primary">Salvar</button>
      </div>
    </div>
  </div>
</div>