<!-- Section hearder -->
<?php $__env->startSection('header'); ?>
<svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor" class="bi bi-person-plus" viewBox="0 0 16 16">
    <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z" />
    <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z" />
</svg>
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
            <input type="string" class="form-control" name="saldo_bsn" id="saldo_bsn" placeholder="00,00" require>
        </div>
    </div>

    <div class="text-center">
        <button class="btn btn-primary btn-sm">
            Cadastrar
        </button>

        <a href="/dash" class="btn btn-danger btn-sm" title="Cancelar">
</form>

Cancelar
</a>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/weslley/Dev/data-controllers/resources/views/clientes/create.blade.php ENDPATH**/ ?>