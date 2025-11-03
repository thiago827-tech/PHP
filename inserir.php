<?php require "conexao.php";
$nome = "Maria";
$email = "maria@gmail.com";
$idade = 16;
$sql = $pdo->prepare("INSERT INTO alunos (nome, email, idade) VALUES (?, ?, ?)");
$sql->execute([$nome, $email, $idade]);
echo "Registro inserido com sucesso!"; ?>