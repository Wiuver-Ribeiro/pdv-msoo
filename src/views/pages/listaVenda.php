<?php $render('header'); ?>
<div class="container mt-5">
    <div class="cols-md-3">
        <input type="text" class="form-control" placeholder="Buscar">
    </div>

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
                    <td class="bg-success text-white">Concluída</td>
                    <td>R$ 250.00</td>
                    <td>22/06/2022</td>
                    <td>14:35</td>
                    <td>Administrador</td>
                    <td>Dinheiro</td>
                    <td>
                        <div class="row">
                            <div class="col">
                                <button class="btn btn-primary">
                                    <ion-icon name="checkmark-circle-outline"></ion-icon>
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