<?php $render('header'); ?>
<div class="container mt-5">
    <div class="cols-md-3">
        <input type="text" class="form-control" placeholder="Buscar">
    </div>

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
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td class="bg-success text-white">Concluída</td>
                    <td>R$ 250.00</td>
                    <td>22/06/2022</td>
                    <td>Administrador</td>
                    <td>Wiuver Ribeiro</td>
                    <td>(64) 99281-0325</td>
                </tr>
                <tr>
                    <td class="bg-warning text-white">Pendente</td>
                    <td>R$ 7850.00</td>
                    <td>26/06/2022</td>
                    <td>Tesoureiro</td>
                    <td>Lara Kamilly</td>
                    <td>(64) 99281-4716</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<?php $render('footer'); ?>