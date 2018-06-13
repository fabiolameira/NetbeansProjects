<?php

header("Content-type: application/json");

include './mysql/mysqlConnect.php';

$amigoDeConversaId = $_GET["amigoDeConversaId"];

session_start();
$id = $_SESSION["id"];

$GLOBALS["db.connection"]->query("update mensagem set lida = 1 where ( idAutor = $amigoDeConversaId and idTarget = $id ) ");

$result = $GLOBALS["db.connection"]->query(
        "select " .
        "m.*, " .
        "autor.nome as nomeAutor, " .
        "amigo.nome as nomeAmigo " .
        "from mensagem m  " .
        "join utilizador autor on autor.id = m.idAutor " .
        "join utilizador amigo on amigo.id = m.idTarget " .
        "where  " .
        "( idAutor = $id and idTarget = $amigoDeConversaId ) " .
        "OR " .
        "( idAutor = $amigoDeConversaId and idTarget = $id ) "
);

if ($result == false) {
    echo $GLOBALS["db.connection"]->error;
}

$todos = array();
while ($row = $result->fetch_assoc()) {
    $todos[] = $row; //atribui o array do user à ultima prosicao do array geral
}
echo json_encode($todos);

include './mysql/mysqlClose.php';
?>

