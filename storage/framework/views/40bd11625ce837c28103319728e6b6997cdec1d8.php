<!-- Section hearder -->
<?php $__env->startSection('header'); ?>
Bank Setup Now - Editar
<?php $__env->stopSection(); ?>

<!-- Section contents -->
<?php $__env->startSection('contents'); ?>

<ul class="list-group">
    <?php $__currentLoopData = $contas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $conta => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <li class="list-group-item"><?php echo e($value); ?></li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>

<ul class="list-group">
    <?php $__currentLoopData = $clientes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cliente => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <li class="list-group-item"><?php echo e($value); ?></li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>

<!-- Botão voltar -->
<div class="form-group mb-5">
  <a href="/dash" class="btn btn-danger btn-sm" title="Novo usuário">Voltar</a>
</div>

<!-- usuário atual -->
<div class="shadow-sm w-25 p-1 mb-2 bg-info rounded"><b>Conta atual</b></div>
<?php $__currentLoopData = $contas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $conta): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<?php $__currentLoopData = $clientes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cliente): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<form method="post">
  <!-- Metodo de segurança laravel para método post - token de verificação -->
  <?php echo csrf_field(); ?>
  <div class="form-row mb-5">
    <div class="form-group col-md-4">
      <label for="nome_chave_bsn">Usuário</label>
      <input type="string" class="form-control" value="<?php echo e($cliente->nome); ?>" name="nome_chave_bsn" id="nome_chave_bsn" placeholder="De um nome para chave de sua conta" disabled>
    </div>
    <div class="form-group col-md-4">
      <label for="nome_chave_bsn">Conta B$N</label>
      <input type="string" class="form-control" value="<?php echo e($conta->nome_chave_bsn); ?>" name="nome_chave_bsn" id="nome_chave_bsn" placeholder="De um nome para chave de sua conta" disabled>
    </div>
    <div class="form-group col-md-4">
      <label for="saldo_bsn">Saldo</label>
      <input type="string" class="form-control" value="<?php echo e($conta->saldo_bsn); ?>" name="saldo_bsn" id="saldo_bsn" placeholder="Saldo B$N" disabled>
    </div>
  </div>
</form>  
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<!-- Transação recebida -->
<div class="shadow-sm w-25 p-1 mb-2 bg-success rounded"><b>Transação recebida</b></div>
<table class="table table-borderless table-sm mb-5">
  <thead class="table-info">
    <tr>
      <th scope="col">Usuário</th>
      <th scope="col">Conta que realizou transação</th>
      <th scope="col">Valor recebido</th>
      <th scope="col">Última atualização</th>
    </tr>
  </thead>
  <?php foreach ($clientes as $cliente) : ?>
  <tbody>
    <tr>
      <td><?php echo e($cliente->login); ?></td>
      <td><?php echo e($cliente->nome); ?></td>
      <td><?php echo e($cliente->email); ?></td>
      <td>Conta BSN</td>
    </tr>
  </tbody>
  <?php endforeach; ?>
</table>

<!-- Transação efetuada -->
<div class="shadow-sm w-25 p-1 mb-2 bg-danger rounded"><b>Transação realizada</b></div>
<table class="table table-borderless table-sm mb-5">
  <thead class="table-info">
    <tr>
      <th scope="col">Conta atual</th>
      <th scope="col">Destinatário (conta)</th>
      <th scope="col">Valor transferido</th>
      <th scope="col">Última transação</th>
    </tr>
  </thead>
  <?php foreach ($clientes as $cliente) : ?>
  <tbody>
    <tr>
      <td><?php echo e($cliente->login); ?></td>
      <td><?php echo e($cliente->nome); ?></td>
      <td><?php echo e($cliente->email); ?></td>
      <td>Conta BSN</td>
    </tr>
  </tbody>  
  <?php endforeach; ?>
</table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\data-controllers\resources\views/contas/bank.blade.php ENDPATH**/ ?>