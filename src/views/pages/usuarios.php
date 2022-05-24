<?php $render('header'); ?>
<div class="container mt-5">
    <button class="btn btn-secondary">Novo Usuário</button>

    <div class="table-responsive mt-4">
        <table class="table table-striped table-hover table-bordered rounded">
            <thead class="thead-dark">
                <tr>
                    <th>Nome</th>
                    <th>CPF</th>
                    <th>E-mail</th>
                    <th>Senha</th>
                    <th>Nível</th>
                    <th>Ações</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>Administrador</td>
                    <td>703.530.101-11</td>
                    <td>administrador@coop.com.br</td>
                    <td>123</td>
                    <td>Administrador</td>
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
                    <td>Operador</td>
                    <td>861.468.661-72</td>
                    <td>operador@coop.com.br</td>
                    <td>123</td>
                    <td>Operador</td>
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