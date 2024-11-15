<?php
include("../session.php");
session_doc();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UCM Visor</title>
    <link rel="stylesheet" href="../css/inicio.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="content.php">UCM Visor</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="content.php">Inicio</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Costos
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="centro_costos.php">Centro costos</a></li>
                            <li><a class="dropdown-item" href="#">Submenu 2</a></li>
                            <li><a class="dropdown-item" href="#">Submenu 3</a></li>
                            <li><a class="dropdown-item" href="#">Submenu 4</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Gestión de usuarios
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="register.php">Registrar un nuevo usuario</a></li>
                            <li><a class="dropdown-item" href="#">Submenu 2</a></li>
                            <li><a class="dropdown-item" href="#">Submenu 3</a></li>
                            <li><a class="dropdown-item" href="#">Submenu 4</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Gestion UCM
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Submenu 1</a></li>
                            <li><a class="dropdown-item" href="#">Submenu 2</a></li>
                            <li><a class="dropdown-item" href="#">Submenu 3</a></li>
                            <li><a class="dropdown-item" href="#">Submenu 4</a></li>
                        </ul>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
    <div class="container shadow">
        <h1 class="title">UCM</h1>
        <p>Usuario logeado: <a style="color:red"><?php echo htmlspecialchars($_SESSION['username']); ?></a></p>
        <p>DEMAS INFORMACION: [Otra información relevante]</p>
    </div>
    <div class="footer">
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
