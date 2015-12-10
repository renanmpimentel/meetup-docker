<?php

$host   = getenv("DATABASE_PORT_3306_TCP_ADDR");
$dbname = getenv("DATABASE_ENV_MYSQL_DATABASE");
$user   = getenv("DATABASE_ENV_MYSQL_USER");
$passwd = getenv("DATABASE_ENV_MYSQL_PASSWORD");

try {
    $db = new PDO('mysql:host=' . $host . ';dbname=' . $dbname, $user, $passwd );
    echo "Conectado!";
} catch (PDOException $e) {
    echo 'Erro ao conectar com o MySQL: ' . $e->getMessage();
}
