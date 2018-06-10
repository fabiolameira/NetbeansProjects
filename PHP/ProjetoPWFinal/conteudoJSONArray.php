<?php
    header("Content-type: application/json");
    
    $conecao = mysqli_connect("127.0.0.1","root","","chat");
    
    //obrigar os dados a serem tratados em utf8 para nao entrarem em conflito na 
    //codificacao do json
    
    mysqli_set_charset($conecao,"utf8");
    
    $result = $conecao->query("SELECT * FROM utilizador");
    $todos = array();
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc())           
        {
            //adicionar novo array associativo no final do $todos
            $todos[] = $row; 
        }        
    } 
    echo json_encode($todos);

    mysqli_close($conecao);
?>
    
  