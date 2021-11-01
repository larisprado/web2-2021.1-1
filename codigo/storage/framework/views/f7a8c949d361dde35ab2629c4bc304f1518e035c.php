<h1>Editar Fornecedor</h1>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDITAR</title>
</head>
<body>
    <form action="../update/<?php echo e($fornecedor->id); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <label for="">Nome Fornecedor</label>
        <input type="text" name="nome" id="nome" value="<?php echo e($fornecedor->nome); ?>">
        <p><label for="">Endereço</label>
        <input type="text" name="endereco" id="endereco" value="<?php echo e($fornecedor->endereco); ?>">
        <p><label for="">Débito</label>
        <input type="text" name="debito" id="debito" value="<?php echo e($fornecedor->debito); ?>">
        
        <p><input type="submit" value="Salvar">    
    </form>
</body>
</html><?php /**PATH /var/www/projeto/resources/views/fornecedores/edit.blade.php ENDPATH**/ ?>