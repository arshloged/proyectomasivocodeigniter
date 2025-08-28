<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Editar Libro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Editar Libro</h1>
        <hr>
        <form action="<?= base_url('libros/actualizar'); ?>" method="post">
            <?= csrf_field() ?>
            <input type="hidden" name="txt_codigo_libro" value="<?= $libro['codigo_libro']; ?>">

            <div class="mb-3">
                <label for="txt_titulo" class="form-label">Título</label>
                <input type="text" name="txt_titulo" id="txt_titulo" class="form-control" value="<?= $libro['titulo']; ?>" required>
            </div>

            <div class="mb-3">
                <label for="lst_editorial" class="form-label">Editorial</label>
                <select class="form-select" name="lst_editorial" id="lst_editorial">
                    <?php foreach ($editoriales as $editorial) { ?>
                        <option value="<?= $editorial['codigo_editorial']; ?>" <?= ($libro['codigo_editorial'] == $editorial['codigo_editorial']) ? 'selected' : ''; ?>>
                            <?= $editorial['nombre']; ?>
                        </option>
                    <?php } ?>
                </select>
            </div>

            <div class="mb-3">
                <label for="lst_autor" class="form-label">Autor</label>
                <select class="form-select" name="lst_autor" id="lst_autor">
                    <?php foreach ($autores as $autor) { ?>
                        <option value="<?= $autor['codigo_autor']; ?>" <?= ($libro['codigo_autor'] == $autor['codigo_autor']) ? 'selected' : ''; ?>>
                            <?= $autor['nombre'] . ' ' . $autor['apellido']; ?>
                        </option>
                    <?php } ?>
                </select>
            </div>
            
            <div class="mb-3">
                <label for="txt_anio" class="form-label">Año de Publicación</label>
                <input type="number" name="txt_anio" id="txt_anio" class="form-control" value="<?= $libro['anio_publicacion']; ?>">
            </div>

            <div class="mb-3">
                <label for="lst_estado" class="form-label">Estado</label>
                <select class="form-select" name="lst_estado" id="lst_estado">
                    <?php foreach ($estados as $estado) { ?>
                        <option value="<?= $estado['codigo_estado']; ?>" <?= ($libro['estado'] == $estado['codigo_estado']) ? 'selected' : ''; ?>>
                            <?= $estado['descripcion']; ?>
                        </option>
                    <?php } ?>
                </select>
            </div>

            <button type="submit" class="btn btn-success">Guardar Cambios</button>
            <a href="<?= base_url('libros'); ?>" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
</body>
</html>