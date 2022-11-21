
<?php

include('../PHP/conexao.php');


?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>HarmoniArt-Login</title>
    <link rel="stylesheet" href="../CSS/nav.css" type="text/css">
    <link rel="stylesheet" href="../CSS/geral.css" type="text/css">
    <link rel="stylesheet" href="../CSS/style.css" type="text/css">
    <link rel="stylesheet" href="../CSS/imagens.css" type="text/css">
    <link rel="stylesheet" href="../CSS/components.css" type="text/css">
    <link rel="stylesheet" href="../CSS/tipografia.css" type="text/css">
    <link rel="icon" type="imagem/png" href="../IMG/logo.png">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body id="login-container">
    <div id="login">
        <div class="divLogo log">
            <a href="../index.html">
                <img src="../IMG/logo2.png" id="logo2">
                <h1 class="logoTXT descriH3" id="logoLogin">
                    <nobr>Harmoniart <b>Núcleo</b></nobr> <br><b> de Ensino</b> Musical
                </h1>
            </a>
        </div>

        <form id="entrar" action="" method="post">
            <div id="selecao">
                <label for="" class="descriH5">
                    <nobr>entrar como</nobr>
                </label>
                <div id="div_select_login">
                    <select class="dropDown descriH5" id="options" onChange="changeOp()" name="op_login">

                        <option value="escolha" class="descriH5">Escolha...</option>
                        <option value="aluno" class="descriH5">Aluno</option>
                        <option value="professor" class="descriH5">Professor</option>
                    </select>
                </div>
            </div>
            <div>
                <label for="" class="descriH4">Usuario</label>
                <input type="text" class="inputs" name="user">
            </div>

            <div>
                <label for="" class="descriH4">Senha</label>
                <input type="password" class="inputs" name="pass">
                <div id="recovery">
                    <a href="recuperar_senha.html" class="descriH5">Esqueci minha senha.</a>
                </div>
            </div>

            <input type="submit" value="Enviar" class="callToAction descriH5" name="submit">
        </form>
    </div>

    <img src="../IMG/fundoLogin.png" alt="" id="fundoLogin">
</body>

</html>
<?php
    

    if(isset($_POST['submit'])){

        if (empty($_POST['user']) and empty($_POST['pass']) and isset($_POST['op_login'])=="Escolha.."){
            echo '<script type="text/javascript">';
            echo ' alert("Nenhum valor válido inserido")';  //not showing an alert box.
            echo '</script>';
        }else{
            $user=$mysqli->real_escape_string($_POST['user']);
            $pass=$mysqli->real_escape_string($_POST['pass']);
            if($_POST['op_login']=="aluno"){
                $sql_code="SELECT * FROM aluno WHERE user_aluno='$user' AND senha_aluno='$pass'";
                $sql_query=$mysqli->query($sql_code) or die("Falha na execucação do códio sql: ".$mysqli->error);
                $quantidade=$sql_query->num_rows;
                if($quantidade==1){

                    $info= $sql_query->fetch_assoc();

                    if(!isset($_SESSION)){
                        session_start();
                    }
                
                    $_SESSION['nome_aluno']=$info['nome_aluno'];
                    $_SESSION['id_aluno']=$info['id_aluno'];
                    $_SESSION['nac_aluno']=$info['nac_aluno'];
                    $_SESSION['nat_aluno']=$info['nat_aluno'];
                    $_SESSION['curso_aluno']=$info['curso_aluno'];
                    $_SESSION['id_aluno']=$info['id_aluno'];


                    header("Location: Aluno/homeAluno.php");
                }else{
                    echo '<script type="text/javascript">';
                    echo ' alert("Dados de login inválidos")';  //not showing an alert box.
                    echo '</script>';
                        }
            }else if($_POST['op_login']=="professor"){
                $sql_code="SELECT * FROM professor WHERE user_prof='$user' AND senha_prof='$pass'";
                $sql_query=$mysqli->query($sql_code) or die("Falha na execucação do códio sql: ".$mysqli->error);
                $quantidade=$sql_query->num_rows;
                if($quantidade==1){

                    $info1= $sql_query->fetch_assoc();

                    if(!isset($_SESSION)){
                        session_start();
                    }
                    $_SESSION['nome_prof']=$info1['nome_prof'];
                    $_SESSION['id_prof']=$info1['id_prof'];
 


                    header("Location: Professor/homeProf.php");                
                }else{
                    echo '<script type="text/javascript">';
                    echo ' alert("Dados de login inválidos")';  //not showing an alert box.
                    echo '</script>';
                }
            }else{
                echo '<script type="text/javascript">';
                echo ' alert("Selecione um tipo de usuário válido")';  //not showing an alert box.
                echo '</script>';
            }
            

        }
}

?>