<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta de DNI</title>
    <!-- Incluye Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="container text-center mt-5">
    <h1 class="mb-4">Consulta de DNI</h1>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="input-group mb-3">
                <input type="text" id="dni" autocomplete="off" name="dni" class="form-control" placeholder="Ingresa el DNI (8 dígitos)" maxlength="8">
                <div class="input-group-append">
                    <button id="consultaDNI" class="btn btn-primary">Consultar</button>
                </div>
            </div>
            <div id="mensajeError" class="text-danger"></div>
        </div>
    </div>
    <div class="card mt-4 p-4 d-none">
        <div class="text-center">
            <img src="img/perfil.png" alt="perfil" class="perfil img-fluid mb-3" style="max-width: 250px;">
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="label">Nombres:</div>
            </div>
            <div class="col-md-8">
                <span id="nombre"></span>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="label">Apellido P.:</div>
            </div>
            <div class="col-md-8">
                <span id="apellidop"></span>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="label">Apellido M.:</div>
            </div>
            <div class="col-md-8">
                <span id="apellidom"></span>
            </div>
        </div>
    </div>
</div>
<footer class="text-center py-3">
    <p>&copy; 2023 Molina Illescas Luis Fernando - Todos los derechos reservados</p>
</footer>
<!-- Incluye jQuery y Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="js/codigo.js"></script>
</body>
</html>
