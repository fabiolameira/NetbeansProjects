<?php

//necessário para dizer ao receptor que o conteudo é json
header("Content-type: application/json");

include './mysql/mysqlConnect.php';

$amigoDeConversaId = $_GET["amigoDeConversaId"];

session_start();
$id = $_SESSION["id"];

//NOVA QUERY PARA A SOLUCAO DO EXERCICIO 10
$result = $GLOBALS["db.connection"]->query(
        "select " .
            "m.*, " .
            "autor.nome as nomeAutor, " .
            "amigo.nome as nomeAmigo " .

           "from mensagem m  " .
              "join utilizador autor on autor.id = m.idAutor " .
              "join utilizador amigo on amigo.id = m.idTarget " .
           "where  " .
              "( idAutor = $id and idTarget = $amigoDeConversaId ) " .
                   "OR " . 
              "( idAutor = $amigoDeConversaId and idTarget = $id ) "
        
        );

if($result == false)
{
    echo $GLOBALS["db.connection"]->error;
}

$todos = array();
while ($row = $result->fetch_assoc()) {
    $todos[] = $row; //atribui o array do user à ultima prosicao do array geral
}
echo json_encode($todos);

include './mysql/mysqlClose.php';



/*
 * Se quiser ver como fica no HTML descomente o script seguinte.
?>
<script>
    
    var json = <?php echo json_encode($todos);?>;
    document.write(json[0].texto);
</script>
<?php
*/
//Deixe estar isto pode fazer falta para imprimir algum erro de conversao de texto do json
//caso o sistema do NetBeans não tenha os caracteres no encoding esperado
//echo json_last_error_msg();

?>

