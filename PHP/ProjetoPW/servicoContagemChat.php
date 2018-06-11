

<?php

//necessário para dizer ao receptor que o conteudo é json
header("Content-type: application/json");

include './mysql/mysqlConnect.php';



session_start();
$id = $_SESSION["id"];

$result = $GLOBALS["db.connection"]->query("select count(*) as total from mensagem where idTarget = $id and lida = 0");
        
$row = $result->fetch_assoc();
    
echo json_encode($row);

include './mysql/mysqlClose.php';




