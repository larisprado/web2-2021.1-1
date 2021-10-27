<h1>Página de fornecedores</h1>

<?php $__currentLoopData = $fornecedor; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fornecedor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<ul>
    <li>Nome: <?php echo e($fornecedor->nome); ?></li>
    <li>Endereço: <?php echo e($fornecedor->endereco); ?></li>
    <li>Débito: <?php echo e($fornecedor->debito); ?></li>

</ul>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php /**PATH /var/www/projeto/resources/views/fornecedores/index.blade.php ENDPATH**/ ?>