<?php $render('headerr'); ?>

<div class="container">
    <h2 class="mt-3">ESTATÍSTICAS DO SISTEMA</h2>
    <div class="row">
        <div class="col border m-2 rounded p-4">
            <div class="d-flex justify-content-between align-items-center">
                <ion-icon class="text-success" size="large" name="bar-chart-outline"></ion-icon>
                <div class="row  d-flex">
                    <h5 class="">4</h5>
                    <h6 class="">Total de Produtos</h6>
                </div>
            </div>
        </div>
        <div class="col border m-2 rounded p-4">
            <div class="d-flex justify-content-between align-items-center">
                <ion-icon class="text-danger" size="large" name="bar-chart-outline"></ion-icon>
                <div class="row  d-flex">
                    <h5 class="">1</h5>
                    <h6 class="">Estoque Baixo</h6>
                </div>
            </div>
        </div>
        <div class="col border m-2 rounded p-4">
            <div class="d-flex justify-content-between align-items-center">
                <ion-icon class="text-dark" size="large" name="bar-chart-outline"></ion-icon>
                <div class="row  d-flex">
                    <h5 class="">2</h5>
                    <h6 class="">Total de Fornecedores</h6>
                </div>
            </div>
        </div>
        <div class="col border m-2 rounded p-4">
            <div class="d-flex justify-content-between align-items-center">
                <ion-icon class="text-success" size="large" name="cash-outline"></ion-icon>
                <div class="row  d-flex">
                    <h5 class="">2</h5>
                    <h6 class="">Total de Vendas Dia</h6>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col border m-2 rounded p-4">
            <div class="d-flex justify-content-between align-items-center">
                <ion-icon class="text-warning" size="large" name="checkmark-circle-outline"></ion-icon>
                <div class="row  d-flex">
                    <h5 class="">3</h5>
                    <h6 class="">Contas à Pagar (Hoje)</h6>
                </div>
            </div>
        </div>
        <div class="col border m-2 rounded p-4">
            <div class="d-flex justify-content-between align-items-center">
                <ion-icon class="text-danger" size="large" name="close-circle-outline"></ion-icon>
                <div class="row  d-flex">
                    <h5 class="">3</h5>
                    <h6 class="">Contas à Pagar Vencidas</h6>
                </div>
            </div>
        </div>
        <div class="col border m-2 rounded p-4">
            <div class="d-flex justify-content-between align-items-center">
                <ion-icon class="text-warning" size="large" name="checkmark-circle-outline"></ion-icon>
                <div class="row  d-flex">
                    <h5 class="">10</h5>
                    <h6 class="">Contas à Receber Hoje</h6>
                </div>
            </div>
        </div>
        <div class="col border m-2 rounded p-4">
            <div class="d-flex justify-content-between align-items-center">
                <ion-icon class="text-danger" size="large" name="checkmark-circle-outline"></ion-icon>
                <div class="row  d-flex">
                    <h5 class="">4</h5>
                    <h6 class="">Contas à Receber Vencidas</h6>
                </div>
            </div>
        </div>
    </div>

    <h3 class="mt-3">ESTATÍSTICAS MENSAIS</h3>
    <div class="row">
        <div class="col border m-2 rounded p-4">
            <div class="d-flex justify-content-between align-items-center">
                <ion-icon class="text-primary" size="large" name="calendar-number-outline"></ion-icon>
                <div class="row  d-flex">
                    <h5 class="">Saldo Total</h5>
                    <h6 class="">Arrecado por Mês</h6>
                    <h4>- R$ 340.00</h4>
                </div>
            </div>
        </div>
        <div class="col border m-2 rounded p-4">
            <div class="d-flex justify-content-between align-items-center">
                <ion-icon class="text-danger" size="large" name="calendar-outline"></ion-icon>
                <div class="row  d-flex">
                    <h5 class="">Contas à Pagar</h5>
                    <h6 class="">Total de 17 contas no Mês</h6>
                    <h4>R$ 5.862.00</h4>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $render('footer'); ?>