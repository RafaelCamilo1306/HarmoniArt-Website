<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Àrea exclusiva-Aluno</title>
    <link rel="stylesheet" href="../../CSS/style.css" type="text/css">
    <link rel="stylesheet" href="../../CSS/nav.css" type="text/css">
    <link rel="stylesheet" href="../../CSS/geral.css" type="text/css">
    <link rel="stylesheet" href="../../CSS/imagens.css" type="text/css">
    <link rel="stylesheet" href="../../CSS/components.css" type="text/css">
    <link rel="stylesheet" href="../../CSS/tipografia.css" type="text/css">
    <link rel="stylesheet" href="../../CSS/iframes.css" type="text/css">
    <link rel="icon" type="imagem/png" href="../../IMG/logo.png">

</head>

<body>
    <h4 class="descriH3">Lembretes</h4>
    <div class="notesArea">
        <div class="note">
            <?php
                include('../../PHP/conexao.php');

                $sqltest = $mysqli->query("select * from lembrete where id_aluno = 1;");

            ?>
            <?php foreach ($sqltest as $lembrete ) : ?>
                <tr>
                    <td>id: <?php echo $lembrete['id_lemb']; ?></td>
                    <td>assunto: <?php echo $lembrete['assunto_lemb']; ?></td>
                    <td>titulo: <?php echo $lembrete['titulo_lemb']; ?></td>
                </tr>
                <br>
            <?php endforeach; ?>

            <p class="descriH5">NÃO HÁ NOVOS LEMBRETES</p>
        </div>
    </div>
</body>

</html>