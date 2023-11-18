<?php
$host = 'mysql_server';
$db = 'test';
$user = 'user';
$pass = 'password';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Successful database conexion on app1.webserver.es.";
} catch (PDOException $e) {
    echo "Conexion error: " . $e->getMessage();
}
?>