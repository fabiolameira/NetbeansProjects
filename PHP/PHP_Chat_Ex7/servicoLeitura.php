<?php

include 'mysqlConnect.php';

if (session_status() == PHP_SESSION_NONE)
    session_start();

$id = $_SESSION["id"];
$amigoDeConversaId = $_POST["amigoDeConversaId"];

$result = $GLOBALS["db.connection"]->query(
        "select * from mensagem where "
        . " ( idAutor = $id and idTarget = $amigoDeConversaId )"
        . " OR "
        . " ( idAutor = $amigoDeConversaId and idTarget = $id )");


json_encode($result);

include 'mysqlClose.php';
?>