<?php

    include('../../PHP/conexao.php');
    include('../../PHP/protect2.php');
    if(!isset($_SESSION)){
    session_start();
    }




?>

<!DOCTYPE html>
<html lang="pt-br" onreset="growIframe()">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Área exclusiva-Professor</title>
    <link rel="stylesheet" href="../../CSS/nav.css" type="text/css">
    <link rel="stylesheet" href="../../CSS/style.css" type="text/css">
    <link rel="stylesheet" href="../../CSS/geral.css" type="text/css">
    <link rel="stylesheet" href="../../CSS/imagens.css" type="text/css">
    <link rel="stylesheet" href="../../CSS/components.css" type="text/css">
    <link rel="stylesheet" href="../../CSS/tipografia.css" type="text/css">
    <link rel="icon" type="imagem/png" href="../../IMG/logo.png">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    
    <script src="../../JavaScript/menu.js" defer></script>
    <script src="../../JavaScript/botaoExpand.js" defer></script>
    <script src="../../JavaScript/popUp.js" defer></script>
    <script src="../../JavaScript/growFrame.js" defer></script>
</head>

<body>
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
            <li><a href="boasVindas.html" class="descriH4" target="iframeAluno" onclick="growIframe('home')">Home</a></li>
            <li><a href="DadosProf.html" class="descriH4" target="iframeAluno" onclick="growIframe('dados')">Dados Pessoais</a></li>
            <li><a href="#" class="descriH4" target="iframeAluno"onclick="growIframe('agenda')">Horários</a></li>
            <li><a href="../login.html" class="descriH4">Sair</a></li>
        </ul>

    </nav>
    <div class="homeConteiner">
        <div class="divPerfil">
            <div class="perfilContent">
                <h2 class="descriH5" style="font-weight: 500;">Indentificação do Professor</h2>
                <img src="../../IMG/perfil.png" id="imgUser">
                <input type="submit" value="Alterar imagem" class="callToAction descriH5">
                <div>
                    <h3 class="descriH5">Nome:</h3>
                    <input type="text" name="nome" class="exibir" readonly>
                </div>
                <div>
                    <h3 class="descriH5">RM:</h3>
                    <input type="text" name="nome" class="exibir" readonly>
                </div>
                <div style="flex-direction: column;">
                    <h3 class="descriH5">Especialidade:</h3>
                    <select class="dropDown descriH5">
                        <option value="violao">violão</option>
                        <option value="violino">violino</option>
                        <option value="bateria">bateria</option>
                    </select>
                </div>
                <div>
                    <h3 class="descriH5">Endereço:</h3>
                    <input type="text" name="nome" class="exibir" readonly>
                </div>
                <div>
                    <h3 class="descriH5">Naturalidade:</h3>
                    <input type="text" name="nome" class="exibir" readonly>
                </div>
                <div>
                    <h3 class="descriH5">Nacionalidade:</h3>
                    <input type="text" name="nome" class="exibir" readonly>
                </div>
            </div>
            <div class="expand">
                <span class="material-icons md-36" id="seta">
                    expand_more
                </span>
            </div>
        </div>

        <iframe src="boasVindas.html" name="iframeAluno" class="home-content"></iframe>
    </div>

    <!-- <script src="../../JavaScript/carrossel.js"></script> -->
</body>

</html>