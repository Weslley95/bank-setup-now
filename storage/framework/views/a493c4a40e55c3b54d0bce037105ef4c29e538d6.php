<!-- Section hearder -->
<?php $__env->startSection('header'); ?>
Bank Setup Now
<?php $__env->stopSection(); ?>

<!-- Section contents -->
<?php $__env->startSection('contents'); ?>

<!-- Verify mensagem sucess -->
<?php if(!empty($mensagem)): ?>
<div class="alert alert-success">
  <?php echo e($mensagem); ?>

</div>
<?php endif; ?>

<div class="form-group">
  <a href="<?php echo e(route('create')); ?>" class="btn btn-dark">Adicionar</a>
</div>
<ul class="list-group">
  <?php foreach ($dados as $dado) : ?>
    <li class="list-group-item  d-flex justify-content-between align-items-center">
      <?php echo e($dado->nome); ?>

      <form method="post" action="/dash/<?php echo e($dado->id); ?>" onsubmit="return confirm('Tem certeza que deseja excluir <?php echo e(addslashes($dado->nome)); ?>')">
        <!-- toekn laravel -->
        <?php echo csrf_field(); ?>
        <!-- Method post = delete -->
        <?php echo method_field('DELETE'); ?>
        <button class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></button>
      </form>
    </li>
  <?php endforeach; ?>
</ul>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\data-controllers\resources\views/dados/index.blade.php ENDPATH**/ ?>