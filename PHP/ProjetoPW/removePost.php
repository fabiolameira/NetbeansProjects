<?php

include './mysql/mysqlConnect.php';

header("Content-type: application/json");


session_start();

$id = $_SESSION["id"];

$sql_novo = "Delete into post (idAutor,idPost) "
        . " VALUES(NOW(),'$posts',$id,)";
       

$result = $GLOBALS["db.connection"]->query($sql_novo);

include './mysql/mysqlClose.php';