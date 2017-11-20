<?php
$params = parse_ini_file('database.ini');
// connect to the postgresql database
$conStr = sprintf("pgsql:host=%s;port=%d;dbname=%s;user=%s;password=%s", $params['host'], $params['port'], $params['database'], $params['user'], $params['password']);
$pdo = new PDO($conStr);
?>