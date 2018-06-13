<?php

include './mysql/mysqlConnect.php';

header("Content-type: application/json");

session_start();

$idPost = $_GET["idPost"];

$sql_novo = "DELETE "
        . " FROM post"
        . " WHERE  idPost = " . $idPost;

$result = $GLOBALS["db.connection"]->query($sql_novo);

include './mysql/mysqlClose.php';
