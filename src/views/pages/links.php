<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PDV-RIBEIRO</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/dba7af9f9b.js" crossorigin="anonymous"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.slim.js" integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script>
  <style>
    a {
      text-decoration:none;
    }
  </style>
  </head>

<div class="container bg-dark p-4 rounded">
  <h2 class="text-white text-center mb-4">Painel de Links</h2>

  <div class="row ">
      <div class="col-3 rounded p-3 text-white bg-primary">
        <h4>Diagrama de Caso de Uso</h4>
        <ul>
          <li><a class="text-white" href="#">Diagrama de Casos de Uso</a></li>
        </ul>
      </div>
      <div class="col-3 rounded p-3 text-white bg-warning">
        <h4>Diagrama de Classe</h4>
        <ul>
          <li><a class="text-white" href="#">Diagrama de Classe</a></li>
        </ul>
      </div>
      <div class="col-3 rounded p-3 text-white bg-success">
        <h4>Diagrama de Atividade</h4>
        <ul>
          <li><a class="text-white" href="#">Diagram de Atividade</a></li>
        </ul>
      </div>
      <div class="col-3 rounded p-3 text-white bg-danger">
        <h4>Projeto</h4>
        <ul>
          <li><a class="text-white" href="<?= $base.'/login' ;?>">Visualizar Projeto</a></li>
        </ul>
      </div>
  </div>
</div>
</body>

</html>