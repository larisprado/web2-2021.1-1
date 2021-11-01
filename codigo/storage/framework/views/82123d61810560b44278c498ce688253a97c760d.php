<h2>Editar Cliente</h2>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar cliente</title>
</head>

<body>
    <form action="../update/<?php echo e($cliente->id); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <label for="">Nome do Cliente</label>
        <input type="text" name="nome" id="nome" value="<?php echo e($cliente->nome); ?>">
        <p><label for="">Endereço</label>
            <input type="text" name="endereco" id="endereco" value="<?php echo e($cliente->endereco); ?>">
        <p><label for="">Débito</label>
            <input type="text" name="debito" id="debito" value="<?php echo e($cliente->debito); ?>">
        <p><input type="submit" value="Salvar">
    </form>
</body>

</html><?php /**PATH /var/www/projeto/resources/views/clientes/edit.blade.php ENDPATH**/ ?>