<?php

include './mysql/mysqlConnect.php';

header("Content-type: application/json");

session_start();
$texto = $_GET["texto"];
$id = $_SESSION["id"];

$sql_novo = "INSERT INTO "
        . " post"
        . " VALUES(0, '" . $texto . "', '" . $id . "', now())";

$result = $GLOBALS["db.connection"]->query($sql_novo);

include './mysql/mysqlClose.php';

while ($row = $result->fetch_assoc()) {

    echo '{ "resposta" : true }';
}



