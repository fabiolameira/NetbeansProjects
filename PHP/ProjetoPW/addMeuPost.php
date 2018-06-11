<?php
//SOLUCAO
include './mysql/mysqlConnect.php';

header("Content-type: application/json");

//NOVO
session_start();
$texto = $_GET["texto"]; //MUDOU PARA GET
$id = $_SESSION["id"];

//$sql_Antes = "insert into mensagem (data,texto) VALUES(NOW(),'$mensagem')";
$sql_novo = "INSERT INTO "
        . " post"
        . " VALUES(0, '". $texto ."', '".$id."', now())";

$result = $GLOBALS["db.connection"]->query($sql_novo);

include './mysql/mysqlClose.php';

while($row = $result->fetch_assoc()) 
{
    
         echo '{ "resposta" : true }';
    
}



