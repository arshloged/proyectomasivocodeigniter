<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Añadir Libro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Añadir Nuevo Libro</h1>
        <hr>
        <form action="<?= base_url('libros/guardar'); ?>" method="post">
            <?= csrf_field() ?>

            <div class="mb-3">
                <label for="txt_titulo" class="form-label">Título</label>
                <input type="text" name="txt_titulo" id="txt_titulo" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="lst_editorial" class="form-label">Editorial</label>
                <select class="form-select" name="lst_editorial" id="lst_editorial">
                    <?php foreach ($editoriales as $editorial) { ?>
                        <option value="<?= $editorial['codigo_editorial']; ?>"><?= $editorial['nombre']; ?></option>
                    <?php } ?>
                </select>
            </div>

            <div class="mb-3">
                <label for="lst_autor" class="form-label">Autor</label>
                <select class="form-select" name="lst_autor" id="lst_autor">
                    <?php foreach ($autores as $autor) { ?>
                        <option value="<?= $autor['codigo_autor']; ?>"><?= $autor['nombre'] . ' ' . $autor['apellido']; ?></option>
                    <?php } ?>
                </select>
            </div>
            
            <div class="mb-3">
                <label for="txt_anio" class="form-label">Precio</label>
                <input type="number" name="txt_anio" id="txt_anio" class="form-control">
            </div>

            <div class="mb-3">
                <label for="lst_estado" class="form-label">Estado</label>
                <select class="form-select" name="lst_estado" id="lst_estado">
                    <?php foreach ($estados as $estado) { ?>
                        <option value="<?= $estado['codigo_estado']; ?>"><?= $estado['nombre']; ?></option>
                    <?php } ?>
                </select>
            </div>

            <button type="submit" class="btn btn-success">Guardar Libro</button>
            <a href="<?= base_url('libros'); ?>" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
</body>
</html>