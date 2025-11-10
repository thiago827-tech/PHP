<?php require "conexao.php";
$id = $_POST["id_upd"];
$novoEmail = $_POST["email_upd"];
$sql = $pdo->prepare("UPDATE alunos SET email = ? WHERE id = ?");
$update = $sql->execute([$novoEmail, $id]);

$sql = $pdo->prepare("SELECT * FROM alunos WHERE id = ?");
$sql->execute([$id]);

if ($sql ->rowCount() == 0) {
    echo "<p style='text-align: center; font-family: Arial;'>Aluno não encontrado. Confira se o ID utilizado está correto apertando o botão Listar e tente novamente. </p>";

    echo '<div style="text-align:center; font-family: Arial;"><a href="listar.php"><button>Listar</button></a></div><br>';
}
else {
    echo "<p style= 'text-align: center; font-family: Arial;'>Alteração de E-mail realizada com sucesso</p>";
    echo '<div style="text-align:center; font-family: Arial;"><a href="listar.php"><button>Listar</button></a></div><br>';
}
include "voltar.html";
?>