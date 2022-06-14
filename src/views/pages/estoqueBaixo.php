<?php $render('header'); ?>
<div class="container mt-5">
    <!-- <button class="btn btn-secondary">Novo Compra</button> -->

    <div class="table-responsive mt-4">
        <table class="table table-striped table-hover table-bordered rounded">
            <thead class="thead-dark">
                <tr>
                    <th>Nome</th>
                    <th>Código</th>
                    <th>Estoque</th>
                    <th>Valor Compra</th>
                    <th>Valor Venda</th>
                    <th>Fornecedor</th>
                    <th>Foto</th>
                    <th>Ações</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>Suco em Pó</td>
                    <td>#4711575</td>
                    <td>581</td>
                    <td>R$ 291.24</td>
                    <td>R$ 851.24</td>
                    <td>Márcio Silva</td>
                    <td>Foto</td>
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