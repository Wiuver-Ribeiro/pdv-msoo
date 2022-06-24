<?php $render('headerr'); ?>
<div class="container mt-5">
    <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">Novo Usuário</button>

    <div class="table-responsive mt-4">
        <table class="table table-striped table-hover table-bordered rounded">
            <thead class="thead-dark">
                <tr>
                    <th>Nome</th>
                    <th>CPF</th>
                    <th>E-mail</th>
                    <th>Senha</th>
                    <th>Nível</th>
                    <th>Ações</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>Administrador</td>
                    <td>703.530.101-11</td>
                    <td>administrador@coop.com.br</td>
                    <td>123</td>
                    <td>Administrador</td>
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
                <tr>
                    <td>Operador</td>
                    <td>861.468.661-72</td>
                    <td>operador@coop.com.br</td>
                    <td>123</td>
                    <td>Operador</td>
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

<!-- Modal-Usuário -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cadastro de Usuário:</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row mb-3">
            <label for="nome">Nome:</label>
            <input class="form-control" type="text" placeholder="Nome">
        </div>
        <div class="row">
            <label for="nome">CPF:</label>
            <input class="form-control" type="text" placeholder="CPF">
        </div>
        <div class="row mb-3">
            <label for="nome">E-mail:</label>
            <input class="form-control" type="email" placeholder="E-mail">
        </div>
        <div class="row mb-3">
            <label for="nome">Senha:</label>
            <input class="form-control" type="password" placeholder="Senha">
        </div>
        <div class="row mb-3">
            <label for="nome">Tipo de Acesso:</label>
           <select class="form-control" name="tipo" id="tipo">
            <option selected>Usuário Comum</option>
            <option>Administrador</option>
            <option>Tesoureiro</option>
           </select>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
        <button type="button" class="btn btn-success">Cadastrar</button>
      </div>
    </div>
  </div>
</div>


<?php $render('footer'); ?>