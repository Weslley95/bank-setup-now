<!-- Section hearder -->
<?php $__env->startSection('header'); ?>
Bank Setup Now - Editar
<?php $__env->stopSection(); ?>

<!-- Section contents -->
<?php $__env->startSection('contents'); ?>

<!-- Botão voltar -->
<div class="form-group">
    <a href="/dash" class="btn btn-danger btn-sm" title="Novo usuário">
        Voltar
    </a>
</div>

<!-- usuário atual -->
<div class="shadow-sm w-25 p-1 m-auto bg-info rounded text-center">
    <b>
        Conta atual
    </b>
</div>

<?php $__currentLoopData = $contas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $conta): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<?php $__currentLoopData = $clientes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cliente): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<form method="post">
  <!-- Metodo de segurança laravel para método post - token de verificação -->
  <?php echo csrf_field(); ?>
    <div class="form-row mb-5">
        <div class="form-group col-md-4">
            <label for="nome_chave_bsn">Cliente</label>
            <input type="string" class="form-control" value="<?php echo e($cliente->nome); ?>" name="nome_chave_bsn" id="nome_chave_bsn" placeholder="De um nome para chave de sua conta" disabled>
        </div>
        <div class="form-group col-md-4">
            <label for="nome_chave_bsn">Conta</label>
            <input type="string" class="form-control" value="<?php echo e($conta->nome_chave_bsn); ?>" name="nome_chave_bsn" id="nome_chave_bsn" placeholder="De um nome para chave de sua conta" disabled>
        </div>
        <div class="form-group col-md-4">
            <label for="saldo_bsn">Saldo</label>
            <input type="string" class="form-control" value="B$S <?php echo e($conta->saldo_bsn); ?>" name="saldo_bsn" id="saldo_bsn" placeholder="Saldo B$N" disabled>
        </div>
    </div>
</form>  
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<!-- Transação recebida -->
<div class="shadow-sm w-25 p-1 m-auto bg-success rounded text-center">
    <b>
        Transação recebida
    </b>
</div>

<table class="table table-borderless table-sm mb-5 mt-3 text-center">
    <thead class="table-info">
        <tr>
            <th scope="col">Remetente (conta)</th>
            <th scope="col">Valor recebido</th>
            <th scope="col">Últma atualização</th>
        </tr>
    </thead>
    <?php foreach ($destinatarios as $destinatario) : ?>
    <tbody>
        <tr>
            <td><?php echo e($destinatario->cliente_remetente); ?></td>
            <td>B$N <?php echo e($destinatario->saldo_recebido); ?></td>
            <td><?php echo e($destinatario->updated_at); ?></td>
        </tr>
    </tbody>  
    <?php endforeach; ?>
</table>

<!-- Transação efetuada -->
<div class="shadow-sm w-25 p-1 m-auto bg-danger rounded text-center">
    <b>
        Transação realizada
    </b>
</div>

<table class="table table-borderless table-sm mb-5 mt-3 text-center">
    <thead class="table-info">
        <tr>
            <th scope="col">Destinatário (conta)</th>
            <th scope="col">Valor transferido</th>
            <th scope="col">Última transação</th>
        </tr>
    </thead>
    <?php foreach ($remetentes as $remetente) : ?>
    <tbody>
        <tr>
            <td><?php echo e($remetente->cliente_destino); ?></td>
            <td>B$N <?php echo e($remetente->saldo_enviado); ?></td>
            <td><?php echo e($remetente->updated_at); ?></td>
        </tr>
    </tbody>  
    <?php endforeach; ?>
</table>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/weslley/Dev/data-controllers/resources/views/historics/index.blade.php ENDPATH**/ ?>