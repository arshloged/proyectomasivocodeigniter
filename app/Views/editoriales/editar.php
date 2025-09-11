<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Editorial</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container py-4">

<h2 class="mb-4">Editar Editorial</h2>

<form method="post" action="<?= base_url('editoriales/actualizar/'.$editorial['codigo_editorial']); ?>" class="card p-4 shadow">
    <div class="mb-3">
        <label class="form-label">Nombre</label>
        <input type="text" name="nombre" value="<?= $editorial['nombre']; ?>" class="form-control" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Dirección</label>
        <input type="text" name="direccion" value="<?= $editorial['direccion']; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label class="form-label">Teléfono</label>
        <input type="text" name="telefono" value="<?= $editorial['telefono']; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label class="form-label">Email</label>
        <input type="email" name="email" value="<?= $editorial['email']; ?>" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Actualizar</button>
    <a href="<?= base_url('editoriales/listar'); ?>" class="btn btn-secondary">Cancelar</a>
</form>

</body>
</html>
