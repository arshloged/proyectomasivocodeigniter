<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Editar Préstamo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Editar Préstamo</h1>
        <hr>
        <form action="<?= base_url('prestamos/actualizar'); ?>" method="post">
            <?= csrf_field() ?>
            <input type="hidden" name="txt_numero_prestamo" value="<?= $prestamo['numero_prestamo']; ?>">

            <div class="mb-3">
                <label for="lst_estudiante" class="form-label">Estudiante</label>
                <select class="form-select" name="lst_estudiante" id="lst_estudiante">
                    <?php foreach ($estudiantes as $estudiante) { ?>
                        <option value="<?= $estudiante['carne_alumno']; ?>" <?= ($prestamo['carne_alumno'] == $estudiante['carne_alumno']) ? 'selected' : ''; ?>>
                            <?= $estudiante['nombre'] . ' ' . $estudiante['apellido']; ?>
                        </option>
                    <?php } ?>
                </select>
            </div>

            <div class="mb-3">
                <label for="lst_empleado" class="form-label">Empleado</label>
                <select class="form-select" name="lst_empleado" id="lst_empleado">
                    <?php foreach ($empleados as $empleado) { ?>
                        <option value="<?= $empleado['codigo_empleado']; ?>" <?= ($prestamo['codigo_empleado'] == $empleado['codigo_empleado']) ? 'selected' : ''; ?>>
                            <?= $empleado['nombre'] . ' ' . $empleado['apellido']; ?>
                        </option>
                    <?php } ?>
                </select>
            </div>

            <div class="mb-3">
                <label for="lst_libro" class="form-label">Libro</label>
                <select class="form-select" name="lst_libro" id="lst_libro">
                    <?php foreach ($libros as $libro) { ?>
                        <option value="<?= $libro['codigo_libro']; ?>" <?= ($prestamo['codigo_libro'] == $libro['codigo_libro']) ? 'selected' : ''; ?>>
                            <?= $libro['titulo']; ?>
                        </option>
                    <?php } ?>
                </select>
            </div>
            
            <div class="mb-3">
                <label for="txt_fecha_prestamo" class="form-label">Fecha de Préstamo</label>
                <input type="date" name="txt_fecha_prestamo" id="txt_fecha_prestamo" class="form-control" value="<?= $prestamo['fecha_prestamo']; ?>" required>
            </div>

            <div class="mb-3">
                <label for="txt_fecha_devolucion" class="form-label">Fecha de Devolución</label>
                <input type="date" name="txt_fecha_devolucion" id="txt_fecha_devolucion" class="form-control" value="<?= $prestamo['fecha_devolucion']; ?>">
            </div>

            

            <button type="submit" class="btn btn-success">Guardar Cambios</button>
            <a href="<?= base_url('prestamos'); ?>" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
</body>
</html>