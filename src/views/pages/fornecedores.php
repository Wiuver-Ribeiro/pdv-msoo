<?php $render('header'); ?>
<div class="container mt-5">
    <button class="btn btn-secondary">Novo Fornecedor</button>

    <div class="table-responsive mt-4">
        <table class="table table-striped table-hover table-bordered rounded">
            <thead class="thead-dark">
                <tr>
                    <th>Nome</th>
                    <th>Tipo Pessoa</th>
                    <th>CPF / CNPJ</th>
                    <th>E-mail</th>
                    <th>Telefone</th>
                    <th>Ações</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>Administrador</td>
                    <td>Jurídica</td>
                    <td>758.547.681-12</td>
                    <td>lara.fornec@forcbrasil.com</td>
                    <td>(64) 3416-9017</td>
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