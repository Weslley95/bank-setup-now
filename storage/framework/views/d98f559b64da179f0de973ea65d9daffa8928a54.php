<!-- Section hearder -->
<?php $__env->startSection('header'); ?>
<svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
  <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
</svg>
Perfil
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

<?php $__currentLoopData = $contas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $conta): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<?php $__currentLoopData = $clientes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cliente): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="nav-scroller bg-body shadow-smx p-4 col-md-6 mx-auto">
    <div class="p-5 bg-body rounded shadow-lg">

        <h5 class="border-bottom border-left border-right border-top pb-2 pt-1 mb-0 text-center">Menu</h5>
        <div class="pt-3 text-center pb-3">
            <!-- Botão editar usuário -->
            <a href="/edit/<?php echo e($cliente->id); ?>">
                <button class="btn btn-outline-warning btn-sm mr-1" title="Editar usuário">
                    <i class="bi bi-pencil-square"></i>
                </button>
            </a>

            <!-- Voltar -->
            <a href="/dash">
                <button class="btn btn-outline-danger btn-sm" title="Dash">
                    <i class="bi bi-arrow-return-left"></i>
                </button>
            </a>
        </div>

        <h5 class="border-bottom border-left border-right border-top pb-2 pt-1 mb-0 text-center">Dados</h5>
        <div class="d-flex text-muted pt-3 ml-5">
            <svg class="bd-placeholder-img flex-shrink-0 me-3 rounded" width="17" height="17" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 32x32" preserveAspectRatio="xMidYMid slice" focusable="false">
                <title>Placeholder</title>
                <rect width="100%" height="100%" fill="#007bff" /><text x="50%" y="50%" fill="#007bff" dy=".3em">32x32</text>
            </svg>
            <div class="ml-1 pb-3 mb-0 small lh-sm w-75">
                <div class="d-flex justify-content-between">
                    <strong class="text-gray-dark">Conta</strong>
                </div>
                <span class="d-block"><?php echo e($conta->nome_chave_bsn); ?></span>
            </div>

            <svg class="bd-placeholder-img flex-shrink-0 me-3 rounded" width="17" height="17" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 32x32" preserveAspectRatio="xMidYMid slice" focusable="false">
                <title>Placeholder</title>
                <rect width="100%" height="100%" fill="#007bff" /><text x="50%" y="50%" fill="#007bff" dy=".3em">32x32</text>
            </svg>
            <div class="ml-1 pb-3 mb-0 small lh-sm w-50">
                <div class="d-flex justify-content-between">
                    <strong class="text-gray-dark">Saldo</strong>
                </div>
                <span class="d-block">B$S <?php echo e($conta->saldo_bsn); ?></span>
            </div>
        </div>

        <div class="d-flex text-muted pt-3 ml-5">

            <svg class="bd-placeholder-img flex-shrink-0 me-3 rounded" width="17" height="17" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 32x32" preserveAspectRatio="xMidYMid slice" focusable="false">
                <title>Placeholder</title>
                <rect width="100%" height="100%" fill="#007bff" /><text x="50%" y="50%" fill="#007bff" dy=".3em">32x32</text>
            </svg>
            <div class="ml-1 pb-3 mb-0 small lh-sm w-75">
                <div class="d-flex justify-content-between">
                    <strong class="text-gray-dark">Cliente</strong>
                </div>
                <span class="d-block"><?php echo e($cliente->nome); ?></span>
            </div>

        </div>
        <div class="d-flex text-muted pt-3 ml-5">

            <svg class="bd-placeholder-img flex-shrink-0 me-3 rounded" width="17" height="17" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 32x32" preserveAspectRatio="xMidYMid slice" focusable="false">
                <title>Placeholder</title>
                <rect width="100%" height="100%" fill="#007bff" /><text x="50%" y="50%" fill="#007bff" dy=".3em">32x32</text>
            </svg>
            <div class="ml-1 pb-3 mb-0 small lh-sm w-50">
                <div class="d-flex justify-content-between">
                    <strong class="text-gray-dark">E-mail</strong>
                </div>
                <span class="d-block"><?php echo e($cliente->email); ?></span>
            </div>
        </div>
        <h5 class="border-top border-top mb-0 text-center"></h5>
    </div>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/weslley/Dev/data-controllers/resources/views/clientes/perfil.blade.php ENDPATH**/ ?>