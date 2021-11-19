<!-- Section hearder -->
<?php $__env->startSection('header'); ?>
Login
<?php $__env->stopSection(); ?>

<!-- Section contents -->
<?php $__env->startSection('contents'); ?>


<div class="card w-50 p-5 mx-auto">
   
    <?php echo $__env->make('erros', ['erros' => $errors], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    
    <form method="post">
        <?php echo csrf_field(); ?>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">E-mail / Chave B$N</label>
            <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Senha</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
            <button type="submit" class="btn btn-primary">Acessar</button>
    </form>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\data-controllers\resources\views/entrar/index.blade.php ENDPATH**/ ?>