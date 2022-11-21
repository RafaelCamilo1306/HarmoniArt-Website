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
    <title>Área Exclusiva | Aluno</title>
    <link rel="stylesheet" href="../../CSS/style.css" type="text/css">
    <link rel="stylesheet" href="../../CSS/nav.css" type="text/css">
    <link rel="stylesheet" href="../../CSS/geral.css" type="text/css">
    <link rel="stylesheet" href="../../CSS/imagens.css" type="text/css">
    <link rel="stylesheet" href="../../CSS/components.css" type="text/css">
    <link rel="stylesheet" href="../../CSS/tipografia.css" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="icon" type="imagem/png" href="../../IMG/logo.png">

    <script src="../../JavaScript/menu.js" defer></script>
    <script src="../../JavaScript/popUp.js" defer></script>
    <script src="../../JavaScript/statusCad.js" defer></script>
    <script src="../../JavaScript/botaoExpand.js" defer></script>
</head>

<body onload="statusOnload()">
    <nav>
        <div class="divLogo">
            <a href="../../index.html">
                <img src="../../IMG/logo.png">
                <h1 class="logoTXT descriH3 logoTxtLogin">
                    <nobr>Harmoniart <b>Núcleo</b></nobr> <br><b> de Ensino</b> Musical
                </h1>
            </a>
        </div>

        <div class="mobile-menu">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div>

        <ul class="sections" id="lista">
            <li><a href="lembretes.html" class="descriH4" target="iframeAluno">Home</a></li>
            <li><a href="DadosAluno.php" class="descriH4" target="iframeAluno">Dados Pessoais</a></li>
            <li><a href="#" class="descriH4" target="iframeAluno">Horários</a></li>
            <li><a href="../logout.php" class="descriH4">Sair</a></li>
        </ul>

    </nav>
    <div class="homeConteiner">
        <div class="divPerfil student">
            <div class="perfilContent">
                <h2 class="descriH5" style="font-weight: 500;">Identificação do Aluno</h2>
                <img src="../../IMG/perfil.png" alt="">
                <input type="submit" value="Alterar imagem" class="callToAction descriH5">
                <div>
                    <h3 class="descriH5">Nome:</h3>
                    <input type="text" name="nome" class="exibir" readonly  value = "<?php echo(    $_SESSION['nome_aluno'])?>">
                </div>
                <div>
                    <h3 class="descriH5">RM:</h3>
                    <input type="text" name="nome" class="exibir" readonly  value = "<?php echo(    $_SESSION['id_aluno'])?>">
                </div>
                <div style="flex-direction: column;">
                    <h3 class="descriH5">Cursando:</h3>
                    <select class="dropDown descriH5">
                        <?php
                            if(isset($_SESSION['curso_aluno'])){
                
                                echo "<option value=".$_SESSION['curso_aluno'].">".$_SESSION['curso_aluno']."</option>";
                            }
        
                        ?>

                    </select>
                </div>
                <div>
                    <h3 class="descriH5">Situação de matricula:</h3>
                    <p id="statusMt" class="descriH5">Inativo</p>
                    <label class="switch">
                        <input type="checkbox" id="botaoMt" onclick="matSituation()">
                        <span class="toggle round"></span>
                    </label>
                </div>
                <div>
                    <h3 class="descriH5">Situação de pagamento:</h3>
                    <p id="statusPg" class="descriH5">Pendente</p>
                    <label class="switch">
                        <input type="checkbox" id="botaoPg" onclick="pagSituation()">
                        <span class="toggle round"></span>
                    </label>
                </div>
                <div>
                    <h3 class="descriH5">
                        <nobr>Ano de inicio:</nobr>
                    </h3>
                    <input type="date" name="nome" class="exibir" readonly>
                </div>
                <div>
                    <h3 class="descriH5">Nacionalidade:</h3>
                    <input type="text" name="nome" class="exibir" readonly value ="<?php echo(    $_SESSION['nac_aluno'])?>">
                </div>
                <div>
                    <h3 class="descriH5">Naturalidade:</h3>
                    <input type="text" name="nome" class="exibir" readonly value = "<?php echo(    $_SESSION['nat_aluno'])?>">
                </div>
            </div>
                    <div class="expand">
                        <span class="material-icons md-36" id="seta">
                            expand_more
                        </span>
                    </div>  
        </div>

        <iframe src="lembretes.php" name="iframeAluno" class="home-content"></iframe>
    </div>
    
</body>

</html>