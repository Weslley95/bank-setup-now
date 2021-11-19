<!-- Section hearder -->
<?php $__env->startSection('header'); ?>
Adicionar Dados
<?php $__env->stopSection(); ?>

<!-- Section contents -->
<?php $__env->startSection('contents'); ?>

<?php if($errors->any()): ?>
<div class="alert alert-danger">
  <ul>
    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <li><?php echo e($error); ?></li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </ul>
</div>
<?php endif; ?>

<form method="post">
  <!-- Metodo de segurança laravel para método post - token de verificação -->
  <?php echo csrf_field(); ?>
  <div class="form-group">
    <label for="nome"></label>
    <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome">
  </div>

  <button class="btn btn-primary">Adicionar</button>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\data-controllers\resources\views/dados/create.blade.php ENDPATH**/ ?>