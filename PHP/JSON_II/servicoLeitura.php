<?php
//incluir o ficheiro mysqConnect para abrir ligação a mysql
include './mysql/mysqlConnect.php';
include './mysql/mysqlClose.php';

$amigoDeConversaId = $_GET['amigoDeConversaId'];
if (session_status() == PHP_SESSION_NONE)
    session_start();
$id = $_SESSION["id"];
$result = $GLOBALS["db.connection"]->query(
        "select * from mensagem where "
        . " ( idAutor = $id and idTarget = $amigoDeConversaId ) "
        . " OR "
        . " ( idAutor = $amigoDeConversaId and idTarget = $id ) "
);

if ($result == false) {
    echo $GLOBALS["db.connection"]->error;
}

$todos = array();
while ($row = $result->fetch_assoc()) {
    $todos[] = $row;
}
echo json_encode($todos);

include './mysql/mysqlClose.php';
?>