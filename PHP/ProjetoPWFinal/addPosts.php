<?php

include './mysql/mysqlConnect.php';

$posts = $_POST["posts"];

//NOVO
session_start();
$id = $_SESSION["id"];

//$sql_Antes = "insert into mensagem (data,texto) VALUES(NOW(),'$mensagem')";
$sql_novo = "insert into posts (idAutor,idPost) "
        . " VALUES(NOW(),'$posts',$id,)";

$GLOBALS["db.connection"]->query($sql_novo);

include './mysql/mysqlClose.php';

include 'posts.php';

