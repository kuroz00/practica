<?php
//ESTOY TOTALMENTE CONSCIENTE DE QUE ESTE CODIGO ES HORRIBLE
// pero intenta tú trabajar con un diccionario en lugar de usar variables particulares.
// desconozco si el uso de memoria varía, de todas formas, es de las primeras versiones de la aplicación
// manejar las variables de manera individual puede ser una ventaja )?

require 'connection.php';
$con = connection();
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $rut            = $_POST["rut"];
    $nombre         = $_POST["nombre"];
    $apellido_p     = $_POST["apellido_paterno"];
    $apellido_s     = $_POST["apellido_materno"];
    $email          = $_POST["email"];
    $usuario        = $_POST["usuario"];
    $password       = $_POST["password"];
    $sede           = $_POST["sede"];
    $edificio       = $_POST["edificio"];
    $piso           = $_POST["piso"];
    $oficina        = $_POST["oficina"]; //faltaba un ;
    $anexo          = $_POST["anexo"];
    // Verificación de que no haya campos con caracteres especiales
    $rut = filter_input(INPUT_POST, 'rut', FILTER_SANITIZE_STRING);
    $nombre = filter_input(INPUT_POST, 'nombre', FILTER_SANITIZE_STRING);
    $apellido_p = filter_input(INPUT_POST, 'apellido_p', FILTER_SANITIZE_STRING);
    $apellido_s = filter_input(INPUT_POST, 'apellido_s', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
    $usuario = filter_input(INPUT_POST, 'usuario', FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
    $sede = filter_input(INPUT_POST, 'sede', FILTER_SANITIZE_STRING);
    $edificio = filter_input(INPUT_POST, 'edificio', FILTER_SANITIZE_STRING);
    $piso = filter_input(INPUT_POST, 'piso', FILTER_SANITIZE_STRING);
    $oficina = filter_input(INPUT_POST, 'oficina', FILTER_SANITIZE_STRING);
    $anexo = filter_input(INPUT_POST, 'anexo', FILTER_SANITIZE_STRING);
    
    $password = password_hash($password, PASSWORD_DEFAULT);

    if (
        empty($rut) || empty($nombre) || empty($apellido_p) || empty($apellido_s) ||
        empty($email) || empty($usuario) || empty($password) || empty($sede) ||
        empty($edificio) || empty($piso) || empty($oficina) || empty($anexo)
    ) {
        echo "Todos los campos son obligatorios.";
        // Puedes detener la ejecución o redirigir al usuario:
        exit();
    }
}
$id = null;
$password = password_hash($password,PASSWORD_DEFAULT); //hashing de la contraseña, todas deben ser hasheadas
$stmt = $con -> prepare("INSERT INTO usuarios VALUES (:id, :rut, :nombre, :apellido_p, :apellido_s, :email, :usuario, :password, :sede, :edificio, :piso, :oficina, :anexo);");
$stmt -> bindParam(':id', $id);
$stmt -> bindParam(':rut',$rut);
$stmt -> bindParam(':nombre',$nombre);
$stmt -> bindParam(':apellido_p',$apellido_p);
$stmt -> bindParam(':apellido_s',$apellido_s);
$stmt -> bindParam(':email',$email);
$stmt -> bindParam(':usuario',$usuario);
$stmt -> bindParam(':password',$password);
$stmt -> bindParam(':sede',$sede);
$stmt -> bindParam(':edificio',$edificio);
$stmt -> bindParam(':piso',$piso);
$stmt -> bindParam(':oficina',$oficina);
$stmt -> bindParam(':anexo',$anexo);
if ($stmt -> execute()) {
	header("Location: ../index.php");
	exit();
}else{
	header("Location: register.php?error=1");
	exit();
}
?>

