<?php

$hostname = "localhost";
$database = "to-do-list";
$username = "postgres";
$password = "********";

try {
    $pdo = new PDO("pgsql:host=$hostname;dbname=$database", $username, $password);
} catch (\PDOException $e) {
    echo "Erro: " .$e->getMessage();
}
