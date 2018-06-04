<?php

require_once './estudante.php';
 if(!isset($_SESSION))
    session_start();

if(isset($_POST["username"]))
    $username = $_POST["username"];

if(isset($_POST["password"]))
    $password = $_POST["password"];

$found = false;

if(isset($_POST["username"]) && isset($_POST["password"]))
{
    include './mysql/mysqlConnect.php';
    $sql = "SELECT * FROM utilizador where username = '" . $username . "' and password = '" . $password . "'";
    $result = $GLOBALS["db.connection"]->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $found = true;
        if(!isset($_SESSION))
        session_start();
        $_SESSION["username"] = $row["username"];
        $_SESSION["id"] = $row["id"];//NOVO
        $_SESSION["fraseApresentacao"] = "Ola o meu nome é " . $row["nome"] . " e tenho " . $row["idade"] . " anos de idade";
    }
    include './mysql/mysqlClose.php';
}
include("index.php");

?>