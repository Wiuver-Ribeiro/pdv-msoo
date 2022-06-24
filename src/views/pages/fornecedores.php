<?php $render('headerr'); ?>
<div class="container mt-5">
    <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">Novo Fornecedor</button>


    <div class="table-responsive mt-4">
        <table class="table table-striped table-hover table-bordered rounded">
            <thead class="thead-dark">
                <tr>
                    <th>Nome</th>
                    <th>Tipo Pessoa</th>
                    <th>CPF / CNPJ</th>
                    <th>E-mail</th>
                    <th>Telefone</th>
                    <th>Ações</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>Administrador</td>
                    <td>Jurídica</td>
                    <td>758.547.681-12</td>
                    <td>lara.fornec@forcbrasil.com</td>
                    <td>(64) 3416-9017</td>
                    <td>
                        <div class="row">
                            <div class="col">
                                <button class="btn btn-primary">
                                    <ion-icon name="checkmark-circle-outline"></ion-icon>
                                </button>
                            </div>
                            <div class="col">
                                <button class="btn btn-danger">
                                    <ion-icon name="close-circle-outline"></ion-icon>
                                </button>
                            </div>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>


<!-- Modal-Fornecedores -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cadastro  de Fornecedor:</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row mb-3">
            <label for="nome">Nome:</label>
            <input class="form-control" type="text" placeholder="Nome">
        </div>
        <div class="row mb-3">
            <label for="nome">Tipo:</label>
            <select class="form-select" name="tipo" id="tipo">
                <option>Pesso Física</option>
                <option>Pesso Jurídica</option>
            </select>
        </div>
        <div class="row mb-3">
            <label for="nome">CPF/CNPJ:</label>
            <input class="form-control" type="text" placeholder="CPF/CNPJ">
        </div>
        <div class="row mb-3">
            <label for="nome">Telefone:</label>
            <input class="form-control" type="text" placeholder="(00) 0 0000-0000">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
        <button type="button" class="btn btn-success">Cadastrar</button>
      </div>
    </div>
  </div>
</div>
<?php $render('footer'); ?>