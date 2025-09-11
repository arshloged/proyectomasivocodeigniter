<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Autores</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body class="container py-4">

<?php if(session()->getFlashdata('mensaje')): ?>
<script>
let mensaje = "<?= session()->getFlashdata('mensaje') ?>";
let texto = mensaje == 'agregado' ? 'Funcionó!!!!' :
            mensaje == 'actualizado' ? 'Wow, si funciona!!' :
            'Se jue';

Swal.fire({
    icon: 'success',
    title: 'Junciona',
    text: texto,
    timer: 2000,
    showConfirmButton: false
});
</script>
<?php endif; ?>

<div class="d-flex justify-content-between align-items-center mb-3">
    <h2>Lista de Autores</h2>
    <a href="<?= base_url('autores/crear'); ?>" class="btn btn-success">+ Agregar Autor</a>
</div>

<table class="table table-bordered table-striped table-hover">
    <thead class="table-dark">
        <tr>
            <th>Código</th>
            <th>Apellido</th>
            <th>Nombre</th>
            <th>Nacionalidad</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($autores as $autor): ?>
        <tr>
            <td><?= $autor['codigo_autor']; ?></td>
            <td><?= $autor['apellido']; ?></td>
            <td><?= $autor['nombre']; ?></td>
            <td><?= $autor['nacionalidad']; ?></td>
            <td>
                <a href="<?= base_url('autores/editar/'.$autor['codigo_autor']); ?>" class="btn btn-sm btn-info">Editar</a>
                <a href="<?= base_url('autores/eliminar/'.$autor['codigo_autor']); ?>" class="btn btn-sm btn-danger" onclick="return confirm('¿Desea eliminar este autor?')">Eliminar</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

</body>
</html>
