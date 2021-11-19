<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/png" href="<?php echo e(asset('ico_bank.ico')); ?>" />

  <title>Bank Setup Now</title>
  <!-- CSS Bootstratp -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <!-- icon -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
</head>

<body>

  <div class="container">
    <div class="jumbotron mb-3 bg-info text-white">
      <h1><?php echo $__env->yieldContent('header'); ?></h1>
    </div>

    <?php echo $__env->yieldContent('contents'); ?>
  </div>
  <footer class="text-center text-white fixed-bottom" style="background-color: #1e8495;">
    <!-- Grid container -->
    <div class="container">
      <!-- Section: Social media -->
      <!-- Github -->
      <a class="btn btn-outline-light btn-floating m-2" href="#!" role="button">
        <i class="bi bi-github"></i>
      </a>
      <!-- Section: Social media -->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center p-1">
      Copyright © 2021 Bank Setup Now
    </div>
    <!-- Copyright -->
  </footer>
</body>

</html><?php /**PATH /Users/weslley/Dev/data-controllers/resources/views/layout.blade.php ENDPATH**/ ?>