<?php

include './mysql/mysqlConnect.php';

header("Content-type: application/json");

session_start();
$idPost = $_GET["idPost"]; //MUDOU PARA GET
$id = $_SESSION["id"];


$sql_novo = "DELETE "
        . " FROM likes"
        . " WHERE  idPost = ". $idPost
        . " AND idAutor = ".$id;

$result = $GLOBALS["db.connection"]->query($sql_novo);

include './mysql/mysqlClose.php';

while($row = $result->fetch_assoc()) 
{
    
         echo '{ "resposta" : true }';
    
}

