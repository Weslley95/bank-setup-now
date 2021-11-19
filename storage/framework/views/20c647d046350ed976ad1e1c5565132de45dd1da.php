<!-- Section hearder -->
<?php $__env->startSection('header'); ?>
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

<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dt => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<li class="list-group-item"><?php echo e($value); ?></li>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            
<div class="nav-scroller bg-body shadow-smx p-4 col-md-6 mx-auto">
    <div class="p-5 bg-body rounded shadow-lg">
        
        <h5 class="border-bottom border-left border-right border-top pb-2 pt-1 mb-0 text-center">Menu</h5>
        <div class="pt-3 text-center pb-3">
            <!-- Botão editar usuário -->    
            <a href="/dash/edit/">
                <button class="btn btn-outline-warning btn-sm mr-1" title="Editar usuário">
                    <i class="bi bi-pencil-square"></i>
                </button>
            </a>

            <!-- Histórico -->
            <a href="/dash/historic/">
                <button class="btn btn-outline-info btn-sm mr-1"  title="Histórico">
                    <i class="bi bi-file-earmark-text"></i>
                </button>
            </a>

            <!-- Tranferêncioa -->
            <a href="/dash/transation/">
                <button class="btn btn-outline-success btn-sm"  title="Tranferência">
                    <i class="bi bi-currency-dollar"></i>
                </button>
            </a> 
        </div>
        
        <h5 class="border-bottom border-left border-right border-top pb-2 pt-1 mb-0 text-center">Dados</h5>
        <div class="d-flex text-muted pt-3 ml-5">
            <svg class="bd-placeholder-img flex-shrink-0 me-3 rounded" width="17" height="17" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 32x32" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#007bff"/><text x="50%" y="50%" fill="#007bff" dy=".3em">32x32</text></svg>
            <div class="ml-1 pb-3 mb-0 small lh-sm w-75">
                <div class="d-flex justify-content-between">
                    <strong class="text-gray-dark">Conta</strong>
                </div>
                <span class="d-block">B$N</span>
            </div>

            <svg class="bd-placeholder-img flex-shrink-0 me-3 rounded" width="17" height="17" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 32x32" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#007bff"/><text x="50%" y="50%" fill="#007bff" dy=".3em">32x32</text></svg>
            <div class="ml-1 pb-3 mb-0 small lh-sm w-50">
                <div class="d-flex justify-content-between">
                    <strong class="text-gray-dark">Saldo</strong>
                </div>
                <span class="d-block">B$S 60.00</span>
            </div>
        </div>
        
        <div class="d-flex text-muted pt-3 ml-5">

            <svg class="bd-placeholder-img flex-shrink-0 me-3 rounded" width="17" height="17" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 32x32" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#007bff"/><text x="50%" y="50%" fill="#007bff" dy=".3em">32x32</text></svg>
            <div class="ml-1 pb-3 mb-0 small lh-sm w-75">
                <div class="d-flex justify-content-between">
                    <strong class="text-gray-dark">Cliente</strong>
                </div>
                <span class="d-block">Ricardo</span>
            </div>

            <svg class="bd-placeholder-img flex-shrink-0 me-3 rounded" width="17" height="17" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 32x32" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#007bff"/><text x="50%" y="50%" fill="#007bff" dy=".3em">32x32</text></svg>
            <div class="ml-1 pb-3 mb-0 small lh-sm w-50">
                <div class="d-flex justify-content-between">
                    <strong class="text-gray-dark">E-mail</strong>
                </div>
                <span class="d-block">ricardo@gmail.com</span>
            </div>
        </div>
        <h5 class="border-top border-top mb-0 text-center"></h5>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\data-controllers\resources\views/clientes/perfil.blade.php ENDPATH**/ ?>