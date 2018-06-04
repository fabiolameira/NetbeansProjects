<?php
//SOLUCAO
include './mysql/mysqlConnect.php';

header("Content-type: application/json");

$frases = $_POST["frases"]; //MUDOU PARA GET

//NOVO
session_start();
$id = $_SESSION["id"];

//$sql_Antes = "insert into mensagem (data,texto) VALUES(NOW(),'$mensagem')";
$sql_novo = "insert into postmensagem (data,texto, idAutor) "
        . " VALUES(NOW(),'$frases',$id)";

$result = $GLOBALS["db.connection"]->query($sql_novo);

include './mysql/mysqlClose.php';



