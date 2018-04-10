<?php

include './mysql/mysqlConnect.php';

$mensagem = $_POST["mensagem"];

$GLOBALS["db.connection"]->query("insert into mensagem (data,texto) VALUES(NOW(),'$mensagem')");

include './mysql/mysqlClose.php';

include 'chat.php';

