<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$nome = $_POST["nome"];
$username = $_POST["username"];
$email = $_POST["email"];
$password = $_POST["password"];
$telefone = $_POST["telefone"];
$morada = $_POST["morada"];
$idade = $_POST["idade"];

$conecao = mysqli_connect("127.0.0.1", "root","", "chat");
if (mysqli_connect_errno())
{
  echo "Falha a conectar ao MySQL: " . mysqli_connect_error();
}


$sql = "insert into utilizador (username,nome, email,morada, telefone,password,idade) values ('$username','$nome','$email','$morada','$telefone','$password','$idade');";
if ($conecao->query($sql) === TRUE) {
    echo "Registo criado com sucesso";
} else {
    echo "Erro: " . $sql . "<br>" . $conecao->error;
}

include("index.php");