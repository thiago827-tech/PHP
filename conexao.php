<?php $host = "localhost";
$dbname = "escola";
$user = "root";
$pass = "";

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $pass);
    echo "<p style='text-align:center'>Conexão realizada com sucesso!</p>";
} catch (PDOException $e) {
    echo "Erro ao conectar: " . $e->getMessage();
} ?>