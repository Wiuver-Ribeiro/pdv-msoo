<?php $render('headerr'); ?>
<div class="container mt-5">
    <!-- <button class="btn btn-secondary">Novo Compra</button> -->
    <label for="buscar">Buscar:</label>
    <input type="text" id="buscar" class="form-control">

    <div class="table-responsive mt-4">
        <table class="table table-striped table-hover table-bordered rounded">
            <thead class="thead-dark">
                <tr>
                    <th>Status</th>
                    <th>Valor</th>
                    <th>Data</th>
                    <th>Hora</th>
                    <th>Operador</th>
                    <th>Pagamento</th>
                    <th>Ações</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>Concluída</td>
                    <td>R$ 75.250</td>
                    <td>14/02/2021</td>
                    <td>09:30:00</td>
                    <td>Lara Garcia Ribeiro</td>
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
            </tbody>
        </table>
    </div>
</div>
<?php $render('footer'); ?>