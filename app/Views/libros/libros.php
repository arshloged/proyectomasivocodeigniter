<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Libros</title>
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
        title: 'mira!',
        text: <?= json_encode($mensaje, JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP) ?>,
        confirmButtonText: 'va'
    });
});
</script>
<?php endif; ?>


<body>
    <div class="container mt-5">
        <div class="d-flex justify-content-between align-items-center mb-3">
        <h1>Gestión de Libros</h1>
        <a href="<?= base_url('libros/anadir'); ?>" class="btn btn-success" >+ Añadir Libro</a>
</div>

        <table class="table table-bordered table-striped table-hover">
    <thead class="table-dark">
                <tr>
                    <th>Código</th>
                    <th>Título</th>
                    <th>Autor</th>
                    <th>Editorial</th>
                    <th>Precio</th>
                    <th>Estado</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
    <?php foreach ($libros as $libro) { ?>
        <tr>
            <td><?= $libro['codigo_libro']; ?></td>
            <td><?= $libro['titulo']; ?></td>
            <td><?= $libro['nombre_autor']; ?></td>
            <td><?= $libro['nombre_editorial']; ?></td>
            <td><?= $libro['precio']; ?></td>
            <td><?= $libro['nombre_estado']; ?></td>
            <td>
                <a href="<?= base_url('libros/editar_libro/'.$libro['codigo_libro']); ?>" class="btn btn-info btn-sm">Editar</a>

                <a href="<?= base_url('libros/eliminar/'.$libro['codigo_libro']); ?>" class="btn btn-danger btn-sm" onclick="return confirm('¿Está seguro de que desea eliminar este libro?');">Eliminar</a>
            </td>
        </tr>
    <?php } ?>
</tbody>
        </table>
    </div>
</body>
</html>