<!-- Section hearder -->
<?php $__env->startSection('header'); ?>
Cadastro de cliente
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
        <div class="form-group">
            <label for="nome"></label>
            <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome de usuário" required>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="nome"></label>
            <input type="email" class="form-control" name="email" id="email" placeholder="E-mail" required>
        </div>
        <div class="form-group col-md-6">
            <label for="nome"></label>
            <input type="password" class="form-control" name="senha" id="senha" placeholder="Senha" required>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="nome_chave_bsn"></label>
            <input type="string" class="form-control" name="nome_chave_bsn" id="nome_chave_bsn" placeholder="De um nome para chave de sua conta" required>
        </div>
        <div class="form-group col-md-6">
            <label for="saldo_bsn"></label>
            <input type="string" class="form-control" name="saldo_bsn" id="saldo_bsn" placeholder="B$N 50,00" disabled>
        </div>
    </div>

    <button class="btn btn-primary">
        Cadastrar
    </button>
</form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\data-controllers\resources\views/clientes/create.blade.php ENDPATH**/ ?>