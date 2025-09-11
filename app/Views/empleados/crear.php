<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Agregar Empleado</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container py-4">

    <h2 class="mb-4">Agregar Empleado</h2>

<form method="post" action="<?= base_url('empleados/guardar'); ?>" class="card p-4 shadow">
            <div class="mb-3">
            <label class="form-label">Nombre</label>
            <input type="text" name="nombre" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Apellido</label>
            <input type="text" name="apellido" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Dirección</label>
            <input type="text" name="direccion" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" name="email" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Contraseña</label>
            <input type="password" name="password" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Tipo de Usuario</label>
            <select name="tipo_usuario" class="form-select">
                <option value="1">Administrador</option>
                <option value="2">Empleado</option>
                <option value="3">Maestro</option>
            </select>
        </div>
        <button type="submit" class="btn btn-success">Guardar</button><br><br>
        <a href="<?= base_url('empleados/listar'); ?>" class="btn btn-secondary">Cancelar</a>
    </form>

</body>
</html>
