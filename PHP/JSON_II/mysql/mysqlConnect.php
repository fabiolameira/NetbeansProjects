<?php
    
    require_once(dirname(__FILE__) . '/config.php'); 
    
    $conecao = mysqli_connect($GLOBALS["db.host"],$GLOBALS["db.user"],$GLOBALS["db.pass"], $GLOBALS["db.schema"],$GLOBALS["db.port"]);
    
    //Comentar isto caso dê problemas com caracteres
    mysqli_set_charset($conecao,"utf8");
    //supõe-se que o Netbeans trabalhe em UTF8
    
    if (mysqli_connect_errno())
    {
        echo '{"erro":"Falha a conectar ao MySQL:' . mysqli_connect_error() . '}';
    }
    $GLOBALS["db.connection"] = $conecao;
    
    
?>

