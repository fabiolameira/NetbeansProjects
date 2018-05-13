<?php
//incluir o ficheiro mysqConnect para abrir ligação a mysql
include './mysql/mysqlConnect.php';
?>
<html>
    <head>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <script src="bootstrap/jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script>
            function chamarservico()
        </script>
    </head>
    <body>

        <?php
        if (session_status() == PHP_SESSION_NONE)
            session_start();
        if (isset($_SESSION["username"])) {
            include './header.php';
        }
        ?>
        <div class="container">

            <div class="panel panel-default">
                <div class="panel-heading">
                    CHAT DE TESTE 
                    <a class="btn btn-success pull-right" href="chat.php"><span class="glyphicon glyphicon-refresh"/></a>
                </div>
                <div class="panel-body">
                    <div id="mensagens" class="col-sm-12" style="border:1px solid gray">

                        <?php
                        $id = $_SESSION["id"];
                        $result = $GLOBALS["db.connection"]->query("select * from mensagem m join utilizador autor on"
                                . " autor.id = m.idAutor "
                                . " where "
                                . " ( m.idAutor = $id ) "
                                . " OR "
                                . " ( m.idTarget = $id ) "
                        );
                        while ($row = $result->fetch_assoc()) {
                            if ($row["idAutor"] === $_SESSION["id"]) {
                                echo "<div class='row'>" .
                                " <label class='pull-left'>" .
                                " <label class='label label-success'>" . $row["nome"] . "</label>" .
                                " - " . $row["data"] . " - " . $row["texto"] .
                                " </label>" .
                                "</div>";
                            } else {
                                echo "<div class='row'>" .
                                " <label class='pull-right'>" .
                                " <label class='label label-info'>" . $row["nome"] . "</label>" .
                                " - " . $row["data"] . " - " . $row["texto"] .
                                " </label>" .
                                "</div>";
                            }
                        }
                        ?>

                    </div>
                    <form class="form-horizontal" action="addMensagem.php" method="post">
                        <select name="destinatario" class="form-control">
                            <?php
                            $result = $GLOBALS["db.connection"]->query("select * from utilizador");
                            while ($row = $result->fetch_assoc()) {
                                echo '<option value="' . $row["id"] . '">' . $row["nome"] . "</option>";
                            }
                            ?>
                        </select>
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