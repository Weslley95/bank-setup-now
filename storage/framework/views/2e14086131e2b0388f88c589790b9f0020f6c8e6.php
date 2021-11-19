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
  <a href="/dash/create" class="btn btn-success" title="Novo usuário">Adicionar usuário</a>
</div>

<table class="table table-hover table-sm">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Login</th>
      <th scope="col">Nome</th>
      <th scope="col">E-mail</th>
      <th scope="col">Nome Conta</th>
      <th scope="col">Saldo</th>
      <th scope="col">Ações</th>
    </tr>
  </thead>
  <?php $__currentLoopData = $usuarios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $usuario): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <tbody>
    <tr>
      <th scope="row"><?php echo e($usuario->id); ?></th>
      <td><?php echo e($usuario->login); ?></td>
      <td><?php echo e($usuario->nome); ?></td>
      <td><?php echo e($usuario->email); ?></td>
      <td><?php App\Http\Controllers\UsuariosController::dadosConta('nome_chave_bsn', $usuario->id)?></td>
      <td><?php App\Http\Controllers\UsuariosController::dadosConta('saldo_bsn', $usuario->id)?></td>
      <td>
        <div class="btn-group">
        <!-- Botão excluir usuário -->
        <form method="post" class="form-group" action="/dash/<?php echo e($usuario->id); ?>" onsubmit="return confirm('Tem certeza que deseja excluir <?php echo e(addslashes($usuario->nome)); ?>')">
        <!-- toekn laravel -->
        <?php echo csrf_field(); ?>
        <!-- Method post = delete -->
        <?php echo method_field('DELETE'); ?>
        <button class="btn btn-outline-danger btn-sm mr-1"  title="Excluir usuário <?php echo e($usuario->nome); ?>">
            <i class="bi bi-trash"></i>
        </button>
        </form>
        <!-- Botão editar usuário -->    
        <a href="/dash/editar/<?php echo e($usuario->id); ?>">
            <button class="btn btn-outline-warning btn-sm mr-1"  title="Editar usuário <?php echo e($usuario->nome); ?>">
            <i class="bi bi-pencil-square"></i>
            </button>
        </a>
        <!-- Transferir saldo -->    
        <a href="/dash/bank/<?php echo e($usuario->id); ?>">
            <button class="btn btn-outline-info btn-sm mr-1"  title="Histórico">
            <i class="bi bi-file-earmark-text"></i>
            </button>
        </a> 
        <a href="/dash/bank/<?php echo e($usuario->id); ?>">
            <button class="btn btn-outline-success btn-sm mr-1"  title="Tranferência">
            <i class="bi bi-currency-dollar"></i>
            </button>
        </a> 
        </div>
      </td>
    </tr>
  </tbody>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\data-controllers\resources\views/usuarios/index.blade.php ENDPATH**/ ?>