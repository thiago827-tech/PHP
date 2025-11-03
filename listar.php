<?php require "conexao.php";
$sql = $pdo->query("SELECT * FROM alunos");
foreach ($sql->fetchAll(PDO::FETCH_ASSOC) as $aluno) {
    echo "ID: " . $aluno["id"] . " | ";
    echo "Nome: " . $aluno["nome"] . " | ";
    echo "Email: " . $aluno["email"] . " | ";
    echo "Idade: " . $aluno["idade"] . "<br>";
} ?>