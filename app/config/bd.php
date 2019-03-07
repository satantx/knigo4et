<?php
$host = '127.0.0.1';
// $db   = 'satantx_books';
// $user = 'satantx_books';
// $pass = '2VBsf4cW';
$db   = 'books';
$user = 'root';
$pass = '';
$charset = 'utf8';

try {
    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
    $pdo = new PDO($dsn, $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    $error = 'Невозможно подключиться к серверу баз данных: ';
    echo $error . $e->getMessage();
    exit();
}