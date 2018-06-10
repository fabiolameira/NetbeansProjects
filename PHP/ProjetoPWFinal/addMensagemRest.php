<?php
//SOLUCAO
include './mysql/mysqlConnect.php';

header("Content-type: application/json");

$mensagem = $_GET["mensagem"]; //MUDOU PARA GET

//NOVO
session_start();
$destinatario = $_GET["destinatario"]; //MUDOU PARA GET
$id = $_SESSION["id"];

//$sql_Antes = "insert into mensagem (data,texto) VALUES(NOW(),'$mensagem')";
$sql_novo = "insert into mensagem (data,texto,idAutor,idTarget) "
        . " VALUES(NOW(),'$mensagem',$id,$destinatario)";

$result = $GLOBALS["db.connection"]->query($sql_novo);

include './mysql/mysqlClose.php';

if($result == TRUE)
    echo '{ "resposta" : true }';
else
    echo '{ "resposta" : false }';

