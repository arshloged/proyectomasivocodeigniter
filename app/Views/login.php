<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
        <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
</head>



<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container justify-content-center">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link active" aria-current="page" href="#">Inicio</a>
                <a class="nav-link" href="<?= site_url('estudiantes') ?>">Estudiantes</a>
                <a class="nav-link" href="<?= site_url('grados') ?>">Grados</a>
                <a class="nav-link" href="<?= site_url('prestamos') ?>">Prestamos</a>
                <a class="nav-link" href="<?= base_url('libros') ?>">Libros</a>
                <a class="nav-link" href="<?= base_url('empleados/listar') ?>">Empleados</a>
                <a class="nav-link" href="<?= base_url('autores/listar') ?>">Autores</a>
                <a class="nav-link" href="<?= base_url('editoriales/listar') ?>">Editoriales</a>
            </div>
        </div>
    </div>
</nav>

<h1 align="center">Bienvenido - Добро пожаловать! - 欢迎 </h1>
<body>
    <div class="container">
        <div class="row">
            <div class="col-4 offset-4">
                
                <form action="<?=base_url('login');?>" method="post">
                    <label for="txt_usuario" class="form-label">Usuario</label>
                    <input type="text" name="txt_usuario" id="txt_usuario" class="form-control" placeholder="">

                    <label for="txt_password" class="form-label">Contraseña</label>
                    <input type="password" name="txt_password" id="txt_password" class="form-control"
                        placeholder="">
                    <br>
                    <button type="submit" class="form-control" btn btn-primary mt-2>Iniciar Sezion</button>


                </form>




            </div>
        </div>
    </div>
    <br><br>
<!--
    <div align="center">
        <h3 align="center">Modo Hacker Unlimited Access</h3>
        <br>
        <a href="<?=site_url('estudiantes')?>">Estudiantes</a>
        <a href="<?=site_url('grados')?>">Grados</a>
        <a href="<?=site_url('prestamos')?>">Prestamos</a>
        <a href="<?=base_url('libros')?>">Libros</a>
        <a href="<?= base_url('empleados/listar') ?>">Empleados</a>
        <a href="<?= base_url('autores/listar') ?>">Autores</a>
        <a href="<?= base_url('editoriales/listar') ?>">Editoriales</a>

        <div class="menu">

           


        </div>
-->

<figure class="text-center">
  <blockquote class="blockquote">
    <p>Puedo leer pero soy analfabeta, ¿quien soy?</p>
  </blockquote>
  <figcaption class="blockquote-footer">
    Gitana lectora de fortuna<cite title="Source Title"></cite>
  </figcaption>
</figure>

        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

        <?php if (session()->getFlashdata('errors')): ?>
        <script>
        Swal.fire({
            icon: "error",
            title: "ALTA, DIGO, ALTO!!",
            text: "<?= session()->getFlashdata('errors') ?>"
        });
        </script>
        <?php endif; ?>




        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
        </script>
</body>

</html>