<?php require "conexao.php"; ?>

<h2 style="text-align: center; font-family: Arial;">LISTA DE ALUNOS CADASTRADOS</h2>

<?php
$sql = $pdo->query("SELECT * FROM alunos");
if ($sql->rowCount() == 0) {
    echo "<p style='text-align:center; font-family:Arial;'>Nenhum Aluno Cadastrado, Volte para a tela de cadastro.</p>";
} else {
    foreach ($sql->fetchAll(PDO::FETCH_ASSOC) as $aluno) {
        echo "<div style='text-align: center; font-family: Arial;'>ID: " . $aluno["id"] . " | ";
        echo "Nome: " . $aluno["nome"] . " | ";
        echo "Email: " . $aluno["email"] . " | ";
        echo "Idade: " . $aluno["idade"] . "</div>";
    }
}
?>
<br>
<?php
echo '<div style="text-align:center; font-family: Arial;"><a href="deleteforms.php"><button>Deletar</button></a> <a href="updateforms.php"><button>Alterar</button></a></div><br>';
include "voltar.html";
?>