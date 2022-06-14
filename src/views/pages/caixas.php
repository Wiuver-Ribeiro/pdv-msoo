<?php $render('header'); ?>
<div class="container mt-5">
    <!-- <button class="btn btn-secondary">Novo Compra</button> -->
    <label for="buscar">Buscar:</label>
    <input type="text" id="buscar" class="form-control">

    <div class="table-responsive mt-4">
        <table class="table table-striped table-hover table-bordered rounded">
            <thead class="thead-dark">
                <tr>
                    <th>Status</th>
                    <th>Data Abertura</th>
                    <th>Vendido</th>
                    <th>Quebra</th>
                    <th>Caixa</th>
                    <th>Operador</th>
                    <th>Ações</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>Fechado</td>
                    <td>14/02/2021</td>
                    <td>R$ 00.00</td>
                    <td>R$ 45.50</td>
                    <td>Caixa 3</td>
                    <td>Márcia Cristina</td>
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