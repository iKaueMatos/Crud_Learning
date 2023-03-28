<?php

$host = "localhost";
$database = "empresa";
$user = "root";
$pass ="";

$mysqli = new mysqli($host,$user,$pass,$database);
if($mysqli->connect_errno){
    die("Falha ao se conectar com o banco de dados");
}

