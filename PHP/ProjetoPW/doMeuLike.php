<?php

include './mysql/mysqlConnect.php';

header("Content-type: application/json");

session_start();
$idPost = $_GET["idPost"];
$id = $_SESSION["id"];

$sql_novo = "INSERT INTO "
        . " likes"
        . " VALUE(" . $idPost . ", " . $id . ")";

$result = $GLOBALS["db.connection"]->query($sql_novo);

include './mysql/mysqlClose.php';

while ($row = $result->fetch_assoc()) {
    echo '{ "resposta" : true }';
}

