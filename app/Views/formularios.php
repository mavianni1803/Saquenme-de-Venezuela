<!DOCTYPE html>
<html lang="es">
    
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <h2>SESION PIRATA</h2>
        <?php if (session()->getFlashdata('msg')): ?>
            <div><?= session()->getFlashdata('msg') ?></div>
        <?php endif; ?>

        <form action="/formulario/login" method="post">
            <label for="usuario">Usuario:</label>
            <input type="text" id="usuario" name="usuario" required><br>
            <label for="contrasena">Contraseña:</label>
            <input type= 'password' name="contrasena" id="contrasena" required><br>
            <button type="submit"> Iniciar Sesion</button>

        </form>

        
    </body>
</html>