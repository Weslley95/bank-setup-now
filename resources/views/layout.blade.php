<!doctype html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/png" href="{{asset('ico_bank.ico')}}" />

  <title>Bank Setup Now</title>

  <!-- CSS Bootstratp -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <!-- icon -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
  <!-- budle -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>

<body>
  <div class="container mb-5">
    <div class="jumbotron mb-3 bg-info text-white">
      <h1>@yield('header')</h1>
    </div>

    @yield('contents')
  </div>

  <!-- Footer-->
  <footer class="fixed-bottom" style="background-color: #1e8495;">
    <div class="container text-center">
      <a class="btn btn-outline-light btn-floating m-2" href="https://github.com/Weslley95/data-controllers" target="_blank" role="button">
        <i class="bi bi-github"></i>
      </a>
      <p class="text-center text-white">Copyright © 2021 Bank Setup Now</p>
    </div>
  </footer>

</body>

</html>