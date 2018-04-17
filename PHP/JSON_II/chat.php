<?php
//incluir o ficheiro mysqConnect para abrir ligação a mysql
include './mysql/mysqlConnect.php';
?>
<html>

    <head>
        <link rel = "stylesheet" href = "bootstrap/css/bootstrap.min.css">
        <script src = "bootstrap/jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
    </head>

    <body>

        <?php
        include_once('header.php');
        ?>
        
        <div class="container">

            <div class="panel panel-default">
                <div class="panel-heading">
                    CHAT DE TESTE 
                    <a class="btn btn-success pull-right" href="chat.php"><span class="glyphicon glyphicon-refresh"/></a>
                </div>
                <div class="panel-body">


                    <?php
                    $result = $GLOBALS["db.connection"]->query("select * from mensagem");
                    while ($row = $result->fetch_assoc()) {
                        echo "<p>" . $row["data"] . " - " . $row["texto"] . "</p>";
                    }
                    ?>

                    <form class="form-horizontal" action="addMensagem.php" method="post">
                        <input placeholder="Coloque aqui a mensagem..." class="form-control" type="text" name="mensagem"/>
                        <button class="btn btn-success btn-xs" type="submit">Enviar</button>
                    </form>
                </div>
            </div>

        </div>

    </body>
</html>


<?php
//incluir o ficheiro mysqClose para fechar ligação a mysql
include './mysql/mysqlClose.php';
?>