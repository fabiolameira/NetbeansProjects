<?php

class estudante {

    var $username;
    var $password;
    var $nome;
    var $morada;
    var $idade;

    function __construct($username, $password, $nome, $morada, $idade) {
        $this->username = $username;
        $this->password = $password;
        $this->nome = $nome;
        $this->morada = $morada;
        $this->idade = $idade;
    }

        function getUsername() {
        return $this->username;
    }

    function getPassword() {
        return $this->password;
    }

    function getNome() {
        return $this->nome;
    }

    function getIdade() {
        return $this->idade;
    }

    function setUsername($username) {
        $this->username = $username;
    }

    function setPassword($password) {
        $this->password = $password;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setIdade($idade) {
        $this->idade = $idade;
    }

}

$estudate = array();
$estudate1 = new estudante("fl", "123", "Fábio Lameia", "Rua dos Clérigos, 10", "20");
$estudate2 = new estudante("jocavargeiroca", "perdigao123", "José Vargeirão", "Santa Cona do Assobio, 69", "32");
array_push($estudate, $estudate1);
array_push($estudate, $estudate2);

?>