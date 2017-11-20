<?php
include('config.php');
session_start();

$user_check = $_SESSION['login_user'];

$ses_sql = "SELECT usuario FROM usuario WHERE usuario = '$user_check'";
$result = $pdo->prepare($ses_sql);
$result->execute();
$row = $result->fetch();

$login_session = $row["username"];

if(!isset($_SESSION['login_user'])){
    header("location: Login.php");
}
?>