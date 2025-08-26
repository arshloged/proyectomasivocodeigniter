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
        <h1>Modificar Estudiante</h1>

        <form action="<?=base_url('agregar_estudiante');?>" method="post">
            <label for="txt_carnet" class="form-label">Carné</label>
            <input type="numbre" name="txt_carnet" id="txt_carnet" class="form-control" value="<?=$datosEstudiante['carne_alumno'];?>">
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
                    if ($datosEstudiante['codigo_grado']==$grado['codigo_grado']) {
                ?>
                    <option selected value="<?=$grado['codigo_grado'];?>">
                        <?=$grado['nombre'];?>
                    </option>
                <?php
                    }else{
                ?>
                    <option value="<?=$grado['codigo_grado'];?>">
                        <?=$grado['nombre'];?>
                    </option>
                
                <?php        
                    } 
                ?>

                <?php
                    }//end for
                ?>
            </select>
            <button type="submit" class="form-control btn btn-primary mt-2">Guardar</button>
        </form>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>
</body>

</html>