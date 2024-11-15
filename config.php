<?php
$env = parse_ini_file(trim("access.env"));  //asignar archivo de variables de entorno
// retorno de las variables de entorno, configurar en servidor host para mayor seguridad
// ahora mismo, en la version de prueba, se tiene como user "root" y la passwd es nula
return [
    'host' => $env['DB_HOST'] ?? 'localhost',
    'dbname' => $env['DB_NAME'] ?? '',
    'user' => $env['DB_USER'] ?? '',
    'password' => $env['DB_PASSWORD'] ?? '',
    'charset' => $env['DB_CHARSET'] ?? 'utf8'
];
?>
