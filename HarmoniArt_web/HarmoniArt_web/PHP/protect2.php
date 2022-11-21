<?php

	include('conexao.php');
    if(!isset($_SESSION)){
    session_start();
    }
    if (!isset($_SESSION['id_prof'])){
    	die("Você não pode acesar esta página, porque você não está logado.<p><a href=\"../login.php\">Entrar</a></p>");
    }


