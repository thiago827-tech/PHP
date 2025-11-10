<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deletar</title>
</head>
<body>
    <div style="text-align:center; font-family: Arial;">
        <h2>DELETAR ALUNOS CADASTRADOS</h2>
    <form action="delete.php" method="post">
        <p>Insira o numero do ID correspondente a informação que deseja deletar ("*" para deletar tudo)</p>
        <label>ID</label>
        <input type="text" name="id" required>
        <button type="submit">Enviar</button>
    </form>
    </div>
    <br>
    <?php include "voltar.html"; ?>
</body>
</html>
