<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Estudiantes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1>Grados</h1>

        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Agregar grado
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Grado Nuevo</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="<?=base_url('agregar_grado');?>" method="post">
                            <label for="txt_grado" class="form-label">Grado</label>
                            <input type="numbre" name="txt_codigo" id="txt_codigo" class="form-control">
                            <label for="txt_nombre" class="form-label">Nombre</label>
                            <input type="text" name="txt_nombre" id="txt_nombre" class="form-control">
                          
                            <button type="submit" class="form-control btn btn-primary mt-2">Guardar</button>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn btn-primary">Guardar Cambios</button>
                    </div>
                </div>
            </div>
        </div>



        <table class="table">
            <thead>
                <tr>
                    <th>Grados</th>
                    <th>Nombre</th>
                    
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
    <?php foreach ($datosGrados as $gradoss) { ?>
        <tr>
            <td> <?= $gradoss['codigo_grado']; ?> </td>
            <td> <?= $gradoss['nombre']; ?> </td>
            <td>
              <a href="<?= base_url('editar/').$gradoss['codigo_grado']; ?>" class="btn btn-info">Actualizar</a>

              <a href="<?= base_url('grados/eliminar/'.$gradoss['codigo_grado']); ?>" 
   class="btn btn-danger btn-sm" 
   onclick="return confirm('¿Está seguro de que desea eliminar este grado?');">
   Eliminar
</a>


            </td>
        </tr>
    <?php } ?>
</tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>
</body>

</html>