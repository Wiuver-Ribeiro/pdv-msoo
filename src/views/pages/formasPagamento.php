<?php $render('headerr'); ?>
<div class="container mt-5">

    <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">Novo Forma Pagamento</button>


    <div class="table-responsive mt-4">
        <table class="table table-striped table-hover table-bordered rounded">
            <thead class="thead-dark">
                <tr>
                    <th>Código</th>
                    <th>Forma de Pagamento</th>
                    <th>Ações</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>2</td>
                    <td>Cartão de Crédito</td>
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
                    <td>3</td>
                    <td>Cartão de Débito</td>
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
                    <td>1</td>
                    <td>Á vista</td>
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



<!-- Modal-Forma de Pagamento -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cadastrar Forma de Pagamento:</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row mb-3">
            <label for="nome">Código Máquina:</label>
            <input class="form-control" type="number" placeholder="0">
        </div>
        <div class="row mb-3">
            <label for="nome">Nome forma de pagamento:</label>
            <input class="form-control" type="text" placeholder="Forma pagamento">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
        <button type="button" class="btn btn-success">Cadastrar</button>
      </div>
    </div>
  </div>
</div>
<?php $render('footer'); ?>