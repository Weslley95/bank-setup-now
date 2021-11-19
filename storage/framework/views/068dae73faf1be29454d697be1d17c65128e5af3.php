<!-- Section hearder -->
<?php $__env->startSection('header'); ?>
Bank Setup Now - Editar
<?php $__env->stopSection(); ?>

<!-- Section contents -->
<?php $__env->startSection('contents'); ?>

<?php $__currentLoopData = $contas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $conta): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<?php $__currentLoopData = $clientes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cliente): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

<?php 
$conta->nome_chave_bsn = str_replace(".b\$n", "", $conta->nome_chave_bsn);
?>

<div class="card p-5 col-md-8 mx-auto">
<form method="post">
    <!-- Metodo de segurança laravel para método post - token de verificação -->
    <?php echo csrf_field(); ?>
    <div class="form-group">
        <div class="form-group">
            <label for="nome">Nome usuário</label>
            <input type="text" class="form-control" value="<?php echo e($cliente->nome); ?>" name="nome" id="nome" placeholder="Nome de usuário" required>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="email">E-mail</label>
            <input type="email" class="form-control" value="<?php echo e($cliente->email); ?>" name="email" id="email" placeholder="E-mail" required>
        </div>
        <div class="form-group col-md-6">
            <label for="senha">Senha</label>
            <input type="password" class="form-control" value="<?php echo e($cliente->senha); ?>" name="senha" id="senha" placeholder="Senha" required>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="nome_chave_bsn">Nome chave B$N (Conta)</label>
            <input type="string" class="form-control" value="<?php echo e($conta->nome_chave_bsn); ?>" name="nome_chave_bsn" id="nome_chave_bsn" placeholder="De um nome para chave de sua conta" required>
        </div>
        <div class="form-group col-md-6">
            <label for="saldo_bsn">Saldo</label>
            <input type="string" class="form-control" value="<?php echo e($conta->saldo_bsn); ?>" name="saldo_bsn" id="saldo_bsn" placeholder="Saldo B$N" require>
        </div>
    </div>
    <div class="form-group text-center">
        <button action="/edit/<?php echo e($cliente->id); ?>" class="btn btn-primary btn-sm">
            Atualizar
        </button>
</form>
        <a href="/dash" class="btn btn-danger btn-sm" title="Cancelar">
            Cancelar
        </a>
    </div>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/weslley/Dev/data-controllers/resources/views/contas/index.blade.php ENDPATH**/ ?>