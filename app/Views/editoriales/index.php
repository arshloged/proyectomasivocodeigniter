<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editoriales</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body class="container py-4">

<?php if(session()->getFlashdata('mensaje')): ?>
<script>
let mensaje = "<?= session()->getFlashdata('mensaje') ?>";
let texto = mensaje == 'agregado' ? 'Se agrego eso que agregaste' :
            mensaje == 'actualizado' ? 'Se borró una coma y el codigo funciona' :
            'Se jue';

Swal.fire({
    icon: 'success',
    title: 'Wows',
    text: texto,
    timer: 2000,
    showConfirmButton: false
});
</script>
<?php endif; ?>

<div class="d-flex justify-content-between align-items-center mb-3">
    <h2>Lista de Editoriales</h2>
    <a href="<?= base_url('editoriales/crear'); ?>" class="btn btn-success">+ Agregar Editorial</a>
</div>

<table class="table table-bordered table-striped table-hover">
    <thead class="table-dark">
        <tr>
            <th>Código</th>
            <th>Nombre</th>
            <th>Dirección</th>
            <th>Teléfono</th>
            <th>Email</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($editoriales as $editorial): ?>
        <tr>
            <td><?= $editorial['codigo_editorial']; ?></td>
            <td><?= $editorial['nombre']; ?></td>
            <td><?= $editorial['direccion']; ?></td>
            <td><?= $editorial['telefono']; ?></td>
            <td><?= $editorial['email']; ?></td>
            <td>
                <a href="<?= base_url('editoriales/editar/'.$editorial['codigo_editorial']); ?>" class="btn btn-sm btn-info">Editar</a>
                <a href="<?= base_url('editoriales/eliminar/'.$editorial['codigo_editorial']); ?>" class="btn btn-sm btn-danger" onclick="return confirm('¿Desea eliminar esta editorial?')">Eliminar</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

</body>
</html>
