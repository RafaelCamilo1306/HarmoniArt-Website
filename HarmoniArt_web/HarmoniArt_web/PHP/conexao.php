<?php

$usuario = 'root';
$senha = 'root';
$database = 'harmoniart';
$host = 'localhost';

$mysqli = new mysqli($host,$usuario,$senha,$database);

if($mysqli->error){
    die("Falha ao conectar ao banco de dados");
}

?>