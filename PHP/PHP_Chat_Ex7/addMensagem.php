<?php

include './mysql/mysqlConnect.php';
if (session_status() == PHP_SESSION_NONE)
    session_start();

$mensagem = $_POST["mensagem"];
$destinatario = $_POST["destinatario"];
$id = $_SESSION["id"];

$GLOBALS["db.connection"]->query("insert into mensagem (data,texto, idAutor, idTarget) VALUES(NOW(),'$mensagem', $id, $destinatario)");

include './mysql/mysqlClose.php';

include 'chat.php';

