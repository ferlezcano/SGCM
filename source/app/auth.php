<?php
include ('config.php');
session_start();
// Verifica que tenga permisos para ingresar a la opción
$url = $_SERVER['REQUEST_URI'];
$user_check = $_SESSION['login_user'];
$auth_sql = "select u.id_usuario from usuario u join rol_x_usuario ru on u.id_usuario = ru.id_usuario join rol r on ru.id_rol = r.id_rol join opciones_x_rol optr on ru.id_rol = optr.id_rol join opcion o on optr.id_opcion = o.id_opcion where u.usuario = '$user_check' and o.url = '$url'";
$result = $pdo->prepare($auth_sql);
$result->execute();
$row = $result->fetch();
if ($row[0] < 1) {
    header("location: 403.php");
}
if (! isset($_SESSION['login_user'])) {
    header("location: Login.php");
}
?>