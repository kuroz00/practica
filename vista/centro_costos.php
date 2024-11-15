<?php
include("../session.php");
session_doc();
include("../sql_local_database.php");
$registros = all("PUQ");
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
<!-- Barra de navegacion -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="content.php">UCM Visor</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <!-- Boton Inicio -->
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="content.php">Inicio</a>
                    </li>
                    
                    <!-- Menu desplegable 1-->
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

                    <!-- menu desplegable 2 -->
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

                    <!-- menu desplegable 3 -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Gestión UCM
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


    <div class="container-fluid">

        <div class="info_usuario">
            <h1 class="display-5">Centro de costos</h1>

            <!-- Informacion del usuario -->
            <p>Usuario logeado: <a style="color:red"><?php echo htmlspecialchars($_SESSION['username']); ?></a></p>
            <p>DEMAS INFORMACION: [Otra información relevante]</p>
        </div>
        <!-- Table -->
        <table class="table table-dark table-hover">
            <thead>
                <tr>
                    <th>Llamada N°</th>
                    <th>Desde</th>
                    <th>Hacia</th>
                    <th>Fecha</th>
                    <th>Duración</th>
                    <th>Troncal de origen</th>
                    <th>Troncal de destino</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($registros as $index => $registro): ?>
                <tr class="clickable-row" onclick="toggleDetails(<?php echo $index; ?>)">
                    <td><?php echo htmlspecialchars($registro['AcctId']); ?></td>
                    <td><?php echo htmlspecialchars($registro['caller_name']); ?></td>
                    <td><?php echo htmlspecialchars($registro['dst']); ?></td>
                    <td><?php echo htmlspecialchars($registro['answer']); ?></td>
                    <td><?php echo htmlspecialchars($registro['duration']); ?></td>
                    <td><?php echo htmlspecialchars($registro['dst_trunk_name']); ?></td>
                    <td><?php echo htmlspecialchars($registro['src_trunk_name']); ?></td>
                </tr>
                </tr>
                <tr id="details-<?php echo $index; ?>" class="collapse">
                    <td colspan="7" class="table-secondary">
                        <strong>Información relevante:</strong>
                        <p>Aquí puedes agregar detalles adicionales sobre la llamada, como el tipo de llamada, costos asociados, etc.</p>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <!-- Charts Section -->
        <div class="detalle" style="border: solid; border-color: #000; width:50%;">
            <p>
                ////////////////////////////////////// 
                //////////////////////////////////////
                <br> informacion relevante <br>
                /////////////////////////////////////
                /////////////////////////////////////
            </p>
            <!-- Div para visualizar detalle llamada -->
        </div>

    </div>

    <!-- Footer -->
    <div class="footer">
        <!-- Footer vacio de momento -->
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
    <script>
        function toggleDetails(id) {
            var detailsRow = document.getElementById('details-' + id);
            if (detailsRow.classList.contains('show')) {
                detailsRow.classList.remove('show');
            } else {
                detailsRow.classList.add('show');
            }
        }
    </script>


</body>
</html>
