<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Préstamos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<?php 
$mensaje = session()->getFlashdata('agregado') ?? session()->getFlashdata('actualizado') ?? session()->getFlashdata('eliminado'); 

if ($mensaje): 
?>
<script>
document.addEventListener('DOMContentLoaded', function() {
    Swal.fire({
        icon: 'success',
        title: 'excelentisimo',
        text: <?= json_encode($mensaje, JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP) ?>,
        confirmButtonText: 'va'
    });
});
</script>
<?php endif; ?>

<body>
    <div class="container mt-5">
        <div class="d-flex justify-content-between align-items-center mb-3">
        <h1>Basesita Falsa de Prestamitos</h1>
        <a href="<?= base_url('prestamos/anadir'); ?>" class="btn btn-success">+ Añadir Préstamo</a>
</div>

        <table class="table table-bordered table-striped table-hover">
    <thead class="table-dark">
                <tr>
                    <th>Código</th>
                    <th>Estudiante</th>
                    <th>Empleado</th>
                    <th>Libro</th>
                    <th>Fecha Préstamo</th>
                    <th>Fecha Devolución</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($prestamos as $prestamo) { ?>
                    <tr>
                        <td><?= $prestamo['numero_prestamo']; ?></td>
                        <td><?= $prestamo['nombre_estudiante']; ?></td>
                        <td><?= $prestamo['nombre_empleado']; ?></td>
                        <td><?= $prestamo['titulo_libro']; ?></td>
                        <td><?= $prestamo['fecha_prestamo']; ?></td>
                        <td><?= $prestamo['fecha_devolucion']; ?></td>
                        <td>
                            <a href="<?= base_url('prestamos/editar/'.$prestamo['numero_prestamo']); ?>" class="btn btn-sm btn-info">Editar</a>
                            <a href="<?= base_url('prestamos/eliminar/'.$prestamo['numero_prestamo']); ?>" class="btn btn-danger btn-sm" onclick="return confirm('¿Está seguro de que desea eliminar este préstamo?');">Eliminar</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>