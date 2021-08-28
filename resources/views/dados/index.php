<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Dada Controller</title>
  <!-- CSS Bootstratp -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>

<body>
    
  <div class="container">
    <div class="jumbotron">
      <h1 class="display-6">Dados</h1>
    </div>
      
      <a href="#" class="btn btn-dark m-3">Adicionar</a>
      

    <ul class="list-group">
      <?php foreach ($dados as $dado) : ?>
        <li class="list-group-item">
          <center><?= $dado; ?></center>
        </li>
      <?php endforeach; ?>
    </ul>
  </div>
</body>

</html>