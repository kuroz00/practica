<?php
include("../session.php");
session_doc();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuario</title>
    <link rel="stylesheet" href="register.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>

    <div class="container my-5">
        <h2 class="title mb-4">Registro de Usuario</h2>

        <form action="registro.php" method="post">
            <table table table-dark table-striped>
                <tr>
                    <td><label for="rut">RUT:</label></td>
                    <td><input class="form-control" type="text" id="rut" name="rut" required></td>
                </tr>
                <tr>
                    <td><label for="nombre">Nombre:</label></td>
                    <td><input class="form-control" type="text" id="nombre" name="nombre" required></td>
                </tr>
                <tr>
                    <td><label for="apellido_paterno">Apellido Paterno:</label></td>
                    <td><input class="form-control"  type="text" id="apellido_paterno" name="apellido_paterno" required></td>
                </tr>
                <tr>
                    <td><label for="apellido_materno">Apellido Materno:</label></td>
                    <td><input class="form-control"  type="text" id="apellido_materno" name="apellido_materno" required></td>
                </tr>
                <tr>
                    <td><label for="email">Email:</label></td>
                    <td><input class="form-control"  type="email" id="email" name="email" required></td>
                </tr>
                <tr>
                    <td><label for="usuario">Usuario:</label></td>
                    <td><input class="form-control"  type="text" id="usuario" name="usuario" required></td>
                </tr>
                <tr>
                    <td><label for="password">Contraseña:</label></td>
                    <td><input class="form-control"  type="password" id="password" name="password" required></td>
                </tr>
                <tr>
                    <td><label for="sede">Sede:</label></td>
                    <td>
                        <select class="form-control"  id="sede" name="sede" required>
                            <option value="Punta Arenas">Punta Arenas</option>
                            <option value="Puerto Natales">Puerto Natales</option>
                            <option value="Porvenir">Porvenir</option>
                            <option value="Puerto Williams">Puerto Williams</option>
                            <option value="Coyhaique">Coyhaique</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><label for="edificio">Edificio:</label></td>
                    <td><input class="form-control"  type="text" id="edificio" name="edificio" required></td>
                </tr>
                <tr>
                    <td><label for="piso">Piso:</label></td>
                    <td>
                        <select class="form-control"  id="piso" name="piso" required>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><label for="oficina">Oficina:</label></td>
                    <td><input class="form-control"  type="text" id="oficina" name="oficina" required></td>
                </tr>
                <tr>
                    <td><label for="anexo">Anexo:</label></td>
                    <td><input class="form-control"  type="text" id="anexo" name="anexo" required></td>
                </tr>
            </table>
            <div style="text-align: center; margin-top: 20px;">
                <button  type="button" onclick="window.location.href='content.php';">Volver</button>
                <button  type="submit">Siguiente</button>
            </div>
        </form>
    </div>
    <div class="footer">
        <p>&copy; 2024 Registro de Usuarios</p>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>

</body>
</html>
