<h1>Página de clientes</h1>

<?php $__currentLoopData = $clientes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cliente): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<ul>
    <li>Nome : <?php echo e($cliente->nome); ?></li>
    <li>Endereço: <?php echo e($cliente->endereco); ?></li>
    <li>Débito: <?php echo e($cliente->debito); ?></li>
</ul>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH /var/www/projeto/resources/views/clientes/index.blade.php ENDPATH**/ ?>