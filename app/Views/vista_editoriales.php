<!doctype html>
<html lang="es" data-bs-theme="dark">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Editoriales</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
</head>
<body class="body-tables">
    <hr>
    <a href="<?=base_url('/')?>" class="btn btn-outline-info"><i class="bi bi-house-fill"></i> Inicio</a>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-outline-info" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Agregar Editorial
    </button>
    <br><br>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Ingresar Editoriales</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!--id-->
                    <form action="<?=base_url('agregarEditorial')?>" method="post">
                        <div class="input-group input-group-sm mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-sm">Codigo</span>
                            <input type="number" class="form-control" aria-label="Sizing example input"
                                aria-describedby="inputGroup-sizing-sm" id="codigo_editorial" name="codigo_editorial" >
                        </div>
                        <!--nombre-->
                        <div class="input-group input-group-sm mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-sm">Nombre</span>
                            <input type="text" class="form-control" aria-label="Sizing example input" id="nombre" name="nombre"
                                placeholder="Nombre" aria-describedby="inputGroup-sizing-sm"  required>
                        </div>
                        <div class="input-group input-group-sm mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-sm">Direccion</span>
                            <input type="text" class="form-control" aria-label="Sizing example input" name="direccion"
                                placeholder="Direccion" aria-describedby="inputGroup-sizing-sm" required> 
                        </div>
                        <!--telefono-->
                        <div class="input-group input-group-sm mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-sm">Telefono</span>
                            <input type="number" class="form-control" aria-label="Sizing example input" id="telefono" name="telefono"
                                placeholder="Telefono" aria-describedby="inputGroup-sizing-sm" required>
                        </div>
                        <div class="input-group input-group-sm mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-sm">Email</span>
                            <input type="email" class="form-control" aria-label="Sizing example input" id="email" name="email"
                                placeholder="Email" aria-describedby="inputGroup-sizing-sm" required>
                        </div>
                        <button type="submit" class="btn btn-outline-info">Agregar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <table class="table table-dark table-striped">
        <thead>
            <tr>
                <th scope="col">Codigo</th>
                <th scope="col">Nombre</th>
                <th scope="col">Direccion</th>
                <th scope="col">Telefono</th>
                <th scope="col">Email</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($datos as $dato) : ?>
            <tr>
                <td><?=$dato['codigo_editorial'];?></td>
                <td><?=$dato['nombre'];?></td>
                <td><?=$dato['direccion'];?></td>
                <td><?=$dato['telefono'];?></td>
                <td><?=$dato['email'];?></td>
                <td>
                    <a href="<?=base_url('buscarEditorial/'.$dato['codigo_editorial'])?>" class="btn btn-outline-info"><i class="bi bi-pencil-fill"></i> Editar</a>
                    <a href="<?=base_url('eliminarEditorial/'.$dato['codigo_editorial'])?>" class="btn btn-outline-danger"><i class="bi bi-trash-fill"></i> Eliminar</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-RO1kYv9hmB+3W7mZr+H4Jq5j8jW6nK5e6z5c5r5H5j5j5j5j5j5j5j5j5j5j5j5j" crossorigin="anonymous"></script>
</body>
</html>