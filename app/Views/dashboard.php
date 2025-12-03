<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Bienvenido</title>
    </head>
    <body>
        <h1>Bienvenido al Dashboard</h1>
        <p>Has iniciado sesión correctamente.</p>
        <h2>Datos del Usuario</h2>
        <ul>
            <li><strong>Nombre:</strong> <?= esc($nombre) ?></li>
            <li><strong>Apellido:</strong> <?= esc($apellido) ?></li>
            <li><strong>Cédula:</strong> <?= esc($cedula) ?></li>
            <li><strong>Edad:</strong> <?= esc($edad) ?></li>
            <li><strong>Teléfono:</strong> <?= esc($telefono) ?></li>
            <li><strong>Rol:</strong> <?= esc(session()->get('rol')) ?></li>
        </ul>
    </body>
</html>