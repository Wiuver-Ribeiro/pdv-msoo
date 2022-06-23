<?php $render('headerr'); ?>
<div class="container mt-5">
    <button class="btn btn-secondary">Novo Compra</button>

    <div class="table-responsive mt-4">
        <table class="table table-striped table-hover table-bordered rounded">
            <thead class="thead-dark">
                <tr>
                    <th>Pago</th>
                    <th>Total</th>
                    <th>Data</th>
                    <th>Gerente</th>
                    <th>Fornecedor</th>
                    <th>Tel Fornecedor</th>
                    <th>Ações</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>Pendente</td>
                    <td>250</td>
                    <td>14/02/2021</td>
                    <td>Márcio Alves Ribeiro</td>
                    <td>Lara Garcia Ribeiro</td>
                    <td>3416-9017</td>
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
<?php $render('footer'); ?>