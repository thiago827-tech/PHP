<?php require "conexao.php";

$nome = $_POST["nome"];
$email = $_POST["email"];
$idade = $_POST["idade"];
$sql = $pdo->prepare("INSERT INTO alunos (nome, email, idade) VALUES (?, ?, ?)");
$sql->execute([$nome, $email, $idade]);
echo "<p style='text-align:center; font-family: Arial;'>Registro inserido com sucesso!</p>";
include "voltar.html";
?>

