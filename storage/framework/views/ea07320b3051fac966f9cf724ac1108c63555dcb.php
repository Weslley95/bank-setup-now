<!-- Section hearder -->
<?php $__env->startSection('header'); ?>
Bank Setup Now - Transferência
<?php $__env->stopSection(); ?>

<!-- Section contents -->
<?php $__env->startSection('contents'); ?>

<ul class="list-group">
    <?php $__currentLoopData = $currentContas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $conta => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <li class="list-group-item"><?php echo e($value); ?></li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>

<ul class="list-group">
    <?php $__currentLoopData = $currentClientes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cliente => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <li class="list-group-item"><?php echo e($value); ?></li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>

<ul class="list-group">
    <?php $__currentLoopData = $destinatarios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $destinatario => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <li class="list-group-item"><?php echo e($value); ?></li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>

<?php $__currentLoopData = $currentContas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $conta): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<?php $__currentLoopData = $currentClientes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cliente): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="card p-1">
    <div class="card-header">
        <!-- Botão voltar -->
        <div class="form-group mb-2" style="float:right">
            <a href="/dash" class="btn btn-danger btn-sm" title="Voltar">Volta</a>
        </div>
        <div class="card-header mb-3">
            <h5 class="card-title">
                Painel de transação
            </h5>
            <p class="card-text">
                <?php echo e($cliente->nome); ?> utilize este painel para tranferir suas moedas B$N para outros clientes de usa escolha
            </p>
        </div>
        <form method="post">
            <?php echo csrf_field(); ?>
            <div class="form-row justify-content-center">
                <div class="form-group col-md-3">
                    <label for="inputEmail4" style="text-align: unset">
                        Sua conta
                    </label>
                    <input type="text" value="<?php echo e($conta->nome_chave_bsn); ?>" name="chaveClienteAtual" class="form-control" id="chaveClienteAtual" disabled>
                    <input value="<?php echo e($conta->nome_chave_bsn); ?>" name="contaRemetente" class="form-control" id="chaveClienteAtual" style="display:none;">
                </div>
                <div class="form-group col-md-2">
                    <label for="inputPassword4">
                        Saldo atual
                    </label>
                    <input type="text" value="B$N <?php echo e($conta->saldo_bsn); ?>" name="saldoClienteAtual" class="form-control" id="saldoClienteAtual" placeholder="Password" disabled>
                    <input value="<?php echo e($conta->saldo_bsn); ?>" name="saldoClienteAtual" class="form-control" id="saldoClienteAtual" style="display:none;">
                    <input value="<?php echo e($conta->id); ?>" name="idClienteAtual" class="form-control" id="saldoClienteAtual" style="display:none;">
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            
            <div class="form-row justify-content-center">
                <div class="form-group col-md-3">
                    <label for="inputState">
                        Usuário que irá receber
                    </label>
                    <select id="destinatario" name="destinatario" class="form-control">
                        <option selected>Selecione</option>
                        <?php $__currentLoopData = $destinatarios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $destinatario): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option><?php echo e($destinatario->nome_chave_bsn); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
                <div class="form-group col-md-2">
                    <label for="valorTranferencia">
                        Valor a tranferir
                    </label>
                    <input type="text" class="form-control" id="valorTranferencia" name="valorTranferencia" max="20" required>
                    <input value="<?php echo e($destinatario->user_id); ?>" name="idClienteDestino" class="form-control" id="saldoClienteDestino" style="display:none">
                </div>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary">
                    Tranferir
                </button>
            </div>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\data-controllers\resources\views/transferences/index.blade.php ENDPATH**/ ?>