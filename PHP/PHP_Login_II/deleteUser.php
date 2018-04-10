<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$id = $_GET["id"];

$conecao = mysqli_connect("127.0.0.1", "root","", "chat");
if (mysqli_connect_errno())
{
  echo "Falha a conectar ao MySQL: " . mysqli_connect_error();
}


$sql = "delete from utilizador where id = $id";
if ($conecao->query($sql) === TRUE) {
    echo "Registo apagado com sucesso";
} else {
    echo "Erro: " . $sql . "<br>" . $conecao->error;
}

include("index.php");