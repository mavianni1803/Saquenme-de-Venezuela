
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear producto</title>
</head>
<body>
    <h1>Crear nuevo producto</h1>

    <?php if (session('errors')): ?>
        <p style="color:red;"><?= esc(session('errors')) ?></p>
    <?php endif; ?>

    <form action="<?= site_url('/productos/store')?>" method="post">
        <?= csrf_field() ?>

        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" value="<?= esc(old('nombre')) ?>" required><br><br>

        <label for="descripcion">Descripción:</label>
        <textarea id="descripcion" name="descripcion" required><?= esc(old('descripcion')) ?></textarea><br><br>

        <label for="precio">Precio:</label>
        <input type="number" id="precio" name="precio" step="0.01" value="<?= esc(old('precio')) ?>"><br><br>

        <button type="submit">Guardar producto</button>
    </form>

    <p><a href="<?= site_url('/productos') ?>">Volver a la lista</a></p>
</body>
</html>