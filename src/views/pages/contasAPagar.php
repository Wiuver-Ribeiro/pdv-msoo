<?php $render('header'); ?>
<div class="container mt-5">
    <button class="btn btn-secondary">Novo Fornecedor</button>

    <div class="table-responsive mt-4">
        <table class="table table-striped table-hover table-bordered rounded">
            <thead class="thead-dark">
                <tr>
                    <th>Pago</th>
                    <th>Descrição</th>
                    <th>Valor</th>
                    <th>Usuário</th>
                    <th>Vencimento</th>
                    <th>Arquivo</th>
                    <th>Ações</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>Pago</td>
                    <td>Compra de Produtos</td>
                    <td>R$ 50.00</td>
                    <td>Adminitrador</td>
                    <td>21/06/2022</td>
                    <td>Arquivo</td>
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