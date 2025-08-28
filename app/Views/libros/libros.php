<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Libros</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Gestión de Libros</h1>
        <a href="<?= base_url('libros/anadir'); ?>" class="btn btn-primary mb-3">Añadir Libro</a>

        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>Código</th>
                    <th>Título</th>
                    <th>Autor</th>
                    <th>Editorial</th>
                    <th>Año</th>
                    <th>Estado</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
    <?php foreach ($libros as $libro) { ?>
        <tr>
            <td><?= $libro->codigo_libro; ?></td>
            <td><?= $libro->titulo; ?></td>
            <td><?= $libro->nombre_autor; ?></td>
            <td><?= $libro->nombre_editorial; ?></td>
            <td><?= $libro->anio_publicacion; ?></td>
            <td><?= $libro->nombre_estado; ?></td>
            <td>
                <a href="<?= base_url('libros/editar/'.$libro->codigo_libro); ?>" class="btn btn-info btn-sm">Editar</a>
                <a href="<?= base_url('libros/eliminar/'.$libro->codigo_libro); ?>" class="btn btn-danger btn-sm" onclick="return confirm('¿Está seguro de que desea eliminar este libro?');">Eliminar</a>
            </td>
        </tr>
    <?php } ?>
</tbody>
        </table>
    </div>
</body>
</html>