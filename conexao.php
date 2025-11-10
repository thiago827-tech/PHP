<?php $host = "localhost";
$dbname = "escola";
$user = "root";
$pass = "";

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $pass);
    echo "<p style='text-align:center; font-family: Arial;'>Conexão realizada com sucesso!</p>";
} catch (PDOException $e) {
    echo "<p style='text-align:center; font-family: Arial;'Erro ao conectar: " . $e->getMessage() . "</p>";
} ?>