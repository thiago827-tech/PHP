<?php require "conexao.php"; ?>

<?php
$id = $_POST["id"];
if ($id == "*") {
    $sql = $pdo->prepare("DELETE FROM alunos");
    $sql->execute();
    echo "<p style='text-align:center; font-family: Arial;'>Todos os Registros removidos com sucesso!</p><br>";
    include "voltar.html";
}
else{
$sql = $pdo->prepare("DELETE FROM alunos WHERE id = ?");
$sql->execute([$id]);
echo "<p style='text-align:center; font-family: Arial;'>Registro removido com sucesso!</p><br>";
include "voltar.html";
}
?>