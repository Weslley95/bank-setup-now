<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <!-- CSS Bootstratp -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
  
  <title>Dada Controller</title>
</head>

<body>
  <center><b>Corinthians</b></center>
  <ul class="list-group">
      <?php    foreach ($dados as $dado) : ?>
      <li><center><?= $dado; ?></center></li>
      <?php    endforeach; ?>
  </ul>
</body>

</html>