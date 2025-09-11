<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Editar Empleado</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="container py-4">

    <h2 class="mb-4">Editar Empleado</h2>

    <form method="post" action="<?= base_url('empleados/actualizar/'.$empleado['codigo_empleado']); ?>"
        class="card p-4 shadow">
        <input type="hidden" name="id" value="<?=$empleado['codigo_empleado']?>">
        <div class="mb-3">
            <label class="form-label">Nombre</label>
            <input type="text" name="nombre" class="form-control" value="<?= $empleado['nombre']; ?>" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Apellido</label>
            <input type="text" name="apellido" class="form-control" value="<?= $empleado['apellido']; ?>" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Dirección</label>
            <input type="text" name="direccion" class="form-control" value="<?= $empleado['direccion']; ?>">
        </div>
        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" name="email" class="form-control" value="<?= $empleado['email']; ?>" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Nueva Contraseña (opcional)</label>
            <input type="password" name="password" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Tipo de Usuario</label>
            <label class="form-label">Tipo de Usuario</label>
            <select name="tipo_usuario" class="form-select">
                <option value="1" <?= $empleado['tipo_usuario']==1?'selected':''; ?>>Administrador</option>
                <option value="2" <?= $empleado['tipo_usuario']==2?'selected':''; ?>>Bibliotecario</option>
                <option value="3" <?= $empleado['tipo_usuario']==3?'selected':''; ?>>Maestro</option>
            </select>

        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button><br>
        <a href="<?= base_url('empleados'); ?>" class="btn btn-secondary">Cancelar</a>
    </form>

</body>

</html>