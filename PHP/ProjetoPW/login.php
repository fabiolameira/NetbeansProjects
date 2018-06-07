<?php

require_once './estudante.php';

session_start();

$username = $_POST["username"];
$password = $_POST["password"];

$found = false;

include './mysql/mysqlConnect.php';
$sql = "SELECT * FROM utilizador where username = '" . $username . "' and password = '" . $password . "'";
$result = $GLOBALS["db.connection"]->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $found = true;
    session_start();
    $_SESSION["username"] = $row["username"];
    $_SESSION["id"] = $row["id"];//NOVO
    $_SESSION["fraseApresentacao"] = "Ola o meu nome é " . $row["nome"] . " e tenho " . $row["idade"] . " anos de idade";
}
include './mysql/mysqlClose.php';

include("index.php");

?>