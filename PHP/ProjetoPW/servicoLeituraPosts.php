<?php

header("Content-type: application/json");

include './mysql/mysqlConnect.php';

session_start();
$id = $_SESSION["id"];
$_maxIdPost = $_GET["maxIdPost"];

$query = "SELECT p.*, nome, count( IF(l.idAutor=$id,1,NULL) ) as meulike, count(l.idPost) as likes 
FROM postmensagem p
  join utilizador u on u.id = p.idAutor 
  left join likes l on l.idPost = p.idPost
  join amigos a on a.idamigo1 = $id
  where p.idAutor = a.idamigo2 ";

if ($_maxIdPost != '0') {
    $query = $query . " AND p.idPost >  $_maxIdPost";
}

$query = $query . " group by p.idPost 
  order by p.idPost DESC";

$result = $GLOBALS["db.connection"]->query($query);

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

