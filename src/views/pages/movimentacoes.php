<?php $render('header'); ?>
<div class="container mt-5">
    <button class="btn btn-secondary">Novo Fornecedor</button>

    <div class="table-responsive mt-4">
        <table class="table table-striped table-hover table-bordered rounded">
            <thead class="thead-dark">
                <tr>
                    <th>Tipo</th>
                    <th>Descrição</th>
                    <th>Valor</th>
                    <th>Usuário</th>
                    <th>Data</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>Pago</td>
                    <td>Conta de Luz</td>
                    <td>R$ 100.00</td>
                    <td>Administrador</td>
                    <td>24/06/2022</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<?php $render('footer'); ?>