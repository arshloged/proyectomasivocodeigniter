<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Empleados</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container py-4">

    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>Lista de Empleados</h2>
        <a href="<?= base_url('empleados/crear'); ?>" class="btn btn-success">+ Agregar Empleado</a>
    </div>

    <table class="table table-bordered table-striped table-hover">
        <thead class="table-dark">
            <tr>
                <th>Código</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Email</th>
                <th>Tipo Usuario</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($empleados as $empleado): ?>
            <tr>
                <td><?= $empleado['codigo_empleado']; ?></td>
                <td><?= $empleado['nombre']; ?></td>
                <td><?= $empleado['apellido']; ?></td>
                <td><?= $empleado['email']; ?></td>
                <td>
                    <span class="badge bg-<?= $empleado['tipo_usuario']=='admin'?'primary':'secondary'; ?>">
                        <?= ucfirst($empleado['tipo_usuario']); ?>
                    </span>
                </td>
                <td>
                    <a href="<?= base_url('empleados/editar/'.$empleado['codigo_empleado']); ?>" 
                       class="btn btn-sm btn-info">Editar</a>

                    <a href="<?= base_url('empleados/eliminar/'.$empleado['codigo_empleado']); ?>" 
                       onclick="return confirm('¿Seguro que deseas eliminar este empleado?')" 
                       class="btn btn-sm btn-danger">Eliminar</a>
                </td>
            </tr>
            <?php endforeach; ?>
            
        </tbody>
    </table>

</body>
</html>
