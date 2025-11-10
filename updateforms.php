<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar</title>
    <style>
        div{
            text-align: center; 
            font-family:Arial;
        }

    </style>
</head>

<body>
    <div>
        <form action="update.php" method="post">
            <h2>ALTERAR E-MAIL DE ALUNO</h2>
            <p>Digite o ID do Aluno desejado e o novo email que ele irá receber</p>
            <br>
            <label>ID do Aluno</label>
            <input type="number" name="id_upd" required>
            <label>Novo Email</label>
            <input type="email" name="email_upd" required>
            <button type="submit">Enviar</button> <br><br>
    </form>
    <?php include "voltar.html"; ?>
    </div>
</body>
</html>