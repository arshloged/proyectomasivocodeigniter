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
        <div class="d-flex justify-content-between align-items-center mb-3">
        <h1>Estudiantes</h1>

        <!-- Button trigger modal -->
        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
            +Agregar estudiante
        </button>
</div>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Estudiante Nuevo</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="<?=base_url('agregar_estudiante');?>" method="post">
                            <label for="txt_carnet" class="form-label">Carné</label>
                            <input type="numbre" name="txt_carnet" id="txt_carnet" class="form-control">
                            <label for="txt_nombre" class="form-label">Nombre</label>
                            <input type="text" name="txt_nombre" id="txt_nombre" class="form-control">
                            <label for="txt_apellido" class="form-label">Apellido</label>
                            <input type="text" name="txt_apellido" id="txt_apellido" class="form-control">
                            <label for="txt_direccion" class="form-label">Dirección</label>
                            <input type="text" name="txt_direccion" id="txt_direccion" class="form-control">
                            <label for="txt_telefono" class="form-label">Teléfono</label>
                            <input type="number" name="txt_telefono" id="txt_telefono" class="form-control">
                            <label for="txt_email" class="form-label">Correo electrónico</label>
                            <input type="email" name="txt_email" id="txt_email" class="form-control">
                            <label for="txt_fecha_nac" class="form-label"></label>
                            <input type="date" name="txt_fecha_nac" id="txt_fecha_nac" class="form-control">
                            <label for="" class="form-label">Grado</label>
                            <select class="form-select" name="lst_grado" id="lst_grado">
                                <?php foreach ($datosGrados as $grado) {   
                                ?>
                                <option value="<?=$grado['codigo_grado'];?>">
                                    <?=$grado['nombre'];?> 
                                </option>
                                
                                <?php
                                    }
                                ?>
                            </select>
                            <button type="submit" class="form-control btn btn-primary mt-2">Guardar</button>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar esto</button>
                        
                    </div>
                </div>
            </div>
        </div>



        <table class="table table-bordered table-striped table-hover">
    <thead class="table-dark">
                <tr>
                    <th>Carnet</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Teléfono</th>
                    <th>Grado</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                foreach ($datosEstudiantes->getResult() as $estudiante) {              
            ?>
                <tr>
                    <td> <?=$estudiante->carne_alumno;?> </td>
                    <td> <?php echo $estudiante->nombre;?> </td>
                    <td> <?=$estudiante->apellido;?></td>
                    <td> <?=$estudiante->telefono;?></td>
                    <td> <?=$estudiante->grado;?> </td>
                    <td>
                        <a href="<?=base_url('buscar_estudiante/').$estudiante->carne_alumno;?>" class="btn btn-sm btn-info">Actualizar</a>
                      
                        <a href="<?= base_url('estudiantes/eliminar/'.$estudiante->carne_alumno); ?>" 
   class="btn btn-danger btn-sm" 
   onclick="return confirm('¿Está seguro de que desea eliminar este estudiante?');">
   Eliminar
</a>

                    </td>
                </tr>
                <?php 
                }
            ?>
            </tbody>
        </table>
    </div>

        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<?php if (session()->getFlashdata('error')): ?>
<script>
    Swal.fire({
        icon: "error",
        title: "ALTA, DIGO, ALTO!!",
        text: "<?= session()->getFlashdata('error') ?>"
    });
</script>
<?php endif; ?>


<?php if (session()->getFlashdata('agregado')): ?>
<script>
    Swal.fire({
  title: "Se insertó!",
  text: "<?= session()->getFlashdata('agregado') ?>"
  icon: "success"
});
</script>
<?php endif; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>
</body>

</html>