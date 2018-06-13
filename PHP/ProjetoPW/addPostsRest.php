<?php

include './mysql/mysqlConnect.php';

header("Content-type: application/json");

$frases = $_POST["frases"];

session_start();
$id = $_SESSION["id"];

$sql_novo = "insert into post (data,texto, idAutor) "
        . " VALUES(NOW(),'$frases',$id)";

$result = $GLOBALS["db.connection"]->query($sql_novo);

include './mysql/mysqlClose.php';



