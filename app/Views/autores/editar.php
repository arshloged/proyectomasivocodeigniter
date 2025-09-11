<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Autor</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container py-4">

<h2 class="mb-4">Editar Autor</h2>

<form method="post" action="<?= base_url('autores/actualizar/'.$autor['codigo_autor']); ?>" class="card p-4 shadow">
    <div class="mb-3">
        <label class="form-label">Apellido</label>
        <input type="text" name="apellido" value="<?= $autor['apellido']; ?>" class="form-control" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Nombre</label>
        <input type="text" name="nombre" value="<?= $autor['nombre']; ?>" class="form-control" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Nacionalidad</label>
        <input type="text" name="nacionalidad" value="<?= $autor['nacionalidad']; ?>" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-primary">Actualizar</button>
    <a href="<?= base_url('autores/listar'); ?>" class="btn btn-secondary">Cancelar</a>
</form>

</body>
</html>
