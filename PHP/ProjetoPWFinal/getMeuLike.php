<?php
//SOLUCAO
include './mysql/mysqlConnect.php';

header("Content-type: application/json");

//NOVO
session_start();
$idPost = $_GET["idPost"]; //MUDOU PARA GET
$id = $_SESSION["id"];

//$sql_Antes = "insert into mensagem (data,texto) VALUES(NOW(),'$mensagem')";
$sql_novo = "SELECT count(*) as meuLike"
        . " FROM likes"
        . " WHERE  idPost = ". $idPost
        . " AND idAutor = ".$id;

$result = $GLOBALS["db.connection"]->query($sql_novo);

include './mysql/mysqlClose.php';

while($row = $result->fetch_assoc()) 
{
    if($row["meuLike"] == '1')
    {
         echo '{ "resposta" : true }';
    }
    else
    {
         echo '{ "resposta" : false }';
    }
}

