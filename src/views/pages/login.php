<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Painel de Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body class="bg-dark">
    <div class="container bg-secondary rounded p-4 justify-content-center align-items-center d-flex" style="width:500px; height:300px;margin: 150px auto">
        <div class="col">
            <h2 class="text-white mb-3 mt-3">Painel de Login</h2>
            <div class="row mb-3">
                <label for="email" class="text-white">E-mail</label>
                <input type="email" name="email" id="email" class="form-control" autocomplete="off" placeholder="E-mail">
            </div>
            <div class="row mb-3">
                <label for="senha" class="text-white">Senha</label>
                <input type="password" name="senha" id="senha" class="form-control" autocomplete="off" placeholder="Senha">
            </div>
            <div class="row">
                <button class="btn btn-primary">Login</button>
            </div>
            <div class="row pt-3 pb-3">
                <span>Não tem uma conta? <a class="text-white" href="#">Crie uma conta</a></span>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>