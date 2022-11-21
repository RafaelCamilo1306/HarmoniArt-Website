<?php

    include('../../PHP/conexao.php');
    include('../../PHP/protect.php');
    if(!isset($_SESSION)){
    session_start();
    } 




?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Área Exclusiva | Dados Pessoais</title>
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
    <div class="notesArea update">
        <div class="formsUp">
            <form action="" method="post" class="email">
                <h2 class="descriH5">Alteração de Email</h2>
                <div>
                    <label for="" class="descriH5">Email:</label>
                    <input type="text" class="inputs" placeholder="seuemail@harmoniart.com" name="novo_email">
                </div>
                <input type="submit" value="Alterar" class="botaoTerc descriH5" name="submit_email">
            </form>
            <form action="">
                <h2 class="descriH5">Alteração de Senha</h2>
                <div>
                    <label for="" class="descriH5">Senha Atual:</label>
                    <input type="text" class="inputs" placeholder="seuemail@harmoniart.com">
                </div>
                <div>
                    <label for="" class="descriH5">Nova Senha:</label>
                    <input type="text" class="inputs" placeholder="seuemail@harmoniart.com">
                </div>
                <div>
                    <label for="" class="descriH5">Confirmar Senha:</label>
                    <input type="text" class="inputs" placeholder="seuemail@harmoniart.com">
                </div>
                <input type="submit" value="Alterar" class="botaoTerc descriH5">
            </form>
        </div>
        <form action="">
            <h2 class="descriH5">Alteração das Informações de Endereço</h2>
            <div>
                <label for="" class="descriH5">Endereço:</label>
                <input type="text" class="inputs" placeholder="seuemail@harmoniart.com">
                <label for="" class="descriH5">Número:</label>
                <input type="text" class="inputs" placeholder="seuemail@harmoniart.com">
            </div>
            <div>
                <label for="" class="descriH5">APTO:</label>
                <input type="text" class="inputs" placeholder="seuemail@harmoniart.com">
                <label for="" class="descriH5">Bloco:</label>
                <input type="text" class="inputs" placeholder="seuemail@harmoniart.com">
            </div>
            <div>
                <label for="" class="descriH5">Bairro:</label>
                <input type="text" class="inputs" placeholder="seuemail@harmoniart.com">
                <label for="" class="descriH5">CEP:</label>
                <input type="text" class="inputs" placeholder="seuemail@harmoniart.com">
            </div>
            <div>
                <label for="" class="descriH5">Cidade:</label>
                <input type="text" class="inputs" placeholder="seuemail@harmoniart.com">
                <label for="" class="descriH5">UF:</label>
                <input type="text" class="inputs" placeholder="seuemail@harmoniart.com">
            </div>
            <div>
                <label for="" class="descriH5">Telefone:</label>
                <input type="text" class="inputs" placeholder="seuemail@harmoniart.com">
                <label for="" class="descriH5">Cel:</label>
                <input type="text" class="inputs" placeholder="seuemail@harmoniart.com">
            </div>
            <input type="submit" value="Alterar" class="botaoTerc descriH5">
        </form>
    </div>


</body>
<?php
 
    if(isset($_POST['submit_email'])){
        $novo_email=$_POST['novo_email'];
        $id_aluno=$_SESSION['id_aluno'];
        $sql_code1="SELECT * FROM aluno WHERE email_aluno='$novo_email'";
        $sql_query1=$mysqli->query($sql_code1) or die("Falha na execucação do códio sql: ".$mysqli->error);
        $quantidade=$sql_query1->num_rows;
        if($quantidade==1){
            echo '<script type="text/javascript">';
            echo ' alert("O e-mail requerido já está sendo usado no sistema")';  //not showing an alert box.
            echo '</script>';
                }

        if (empty($_POST['novo_email'])){
            echo '<script type="text/javascript">';
            echo ' alert("Nenhum valor válido inserido")';  //not showing an alert box.
            echo '</script>';
        }else{
            $novo_email=$_POST['novo_email'];
            $id_aluno=$_SESSION['id_aluno'];
            if($sql_query1!=$novo_email AND $quantidade!=1){
                $sql_code2="UPDATE aluno SET email_aluno='$novo_email' WHERE id_aluno='$id_aluno'";
                $sql_query2=$mysqli->query($sql_code2) or die("Falha na execucação do códio sql: ".$mysqli->error);
                echo '<script type="text/javascript">';
                echo ' alert("O e-mail foi atualizado com sucesso")';  //not showing an alert box.
                echo '</script>';
            }
            }

 
            
            

}

?>