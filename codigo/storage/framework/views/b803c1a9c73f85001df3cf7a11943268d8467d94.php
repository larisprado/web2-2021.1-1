<h1>Página de fornecedores</h1>

<?php $__currentLoopData = $fornecedor; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fornecedor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<ul>
    <li>Nome: <?php echo e($fornecedor->nome); ?></li>
    <li>Endereço: <?php echo e($fornecedor->endereco); ?></li>
    <li>Débito: <?php echo e($fornecedor->debito); ?></li>
    <a href="fornecedor/edit/<?php echo e($fornecedor->id); ?>">Editar</a>

    <form action="fornecedor/<?php echo e($fornecedor->id); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('DELETE'); ?>
        <input type="submit" value="Deletar">
    </form>
</ul>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php /**PATH /var/www/projeto/resources/views/fornecedores/index.blade.php ENDPATH**/ ?>