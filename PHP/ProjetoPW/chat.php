<?php
//incluir o ficheiro mysqConnect para abrir ligação a mysql
include './mysql/mysqlConnect.php';
?>
<html>
    <head>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <script src="bootstrap/jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    </head>
    <body>
        <?php
        include './header.php';
        ?>

        <div class="container">

            <div class="panel panel-default">
                <div class="panel-heading">
                    CHAT DE TESTE 
                    <a class="btn btn-success pull-right" href="chat.php"><span class="glyphicon glyphicon-refresh"/></a>
                </div>
                <div class="panel-body">

                    <style>
                        .chat{
                            border: 1px solid lightgray;
                            padding:10px;
                        }
                    </style>

                    <?php
                    session_start();
                    $id = $_SESSION["id"];
                    ?>

                    <div class="chat" id="chat">

                        <?php
                        //Segunda query melhorada
                        $result = $GLOBALS["db.connection"]->query(
                                "select * from mensagem m join utilizador autor on autor.id = m.idAutor "
                                . " where "
                                . " ( m.idAutor = $id ) "
                                . " OR "
                                . " ( m.idTarget = $id ) "
                        );

                        while ($row = $result->fetch_assoc()) {
                            if ($row["idAutor"] == $id) {
                                echo "<div class='row'><div class='col-md-12'><label class='pull-left'> <label class='label label-success'>" . $row["nome"] . "</label> - " . $row["data"] . " - " . $row["texto"] . "</label></div></div>";
                            } else {
                                echo "<div class='row'><div class='col-md-12'><label class=' pull-right'>  <label class='label label-info'>" . $row["nome"] . "</label> - " . $row["data"] . " - " . $row["texto"] . "</label></div></div>";
                            }
                        }
                        ?>
                    </div>

                    <script>
                        function chamaServicoLeitura() {
                            var amigoDeConversa = $("select option:selected").attr("value");

                            $.getJSON(
                                    "servicoLeitura.php", {
                                        "amigoDeConversaId": amigoDeConversa
                                    },
                                    function (jsonData) {

                                        $("#chat").empty();
                                        for (m in jsonData) {
                                            var msg = jsonData[m];
                                            var pull = "pull-right";
                                            var infoStyle = "label-info";
                                            if (msg.idAutor == <?php echo $id ?>) {
                                                pull = "pull-left";
                                                infoStyle = "label-success";
                                            }

                                            var html = "<div class='row'>" +
                                                    "<div class='col-md-12'>" +
                                                    "<label class='" + pull + "'>" +
                                                    "<label class='label " + infoStyle + "'>" +
                                                    msg.idAutor +
                                                    "</label> - " +
                                                    msg.data +
                                                    " - " +
                                                    msg.texto +
                                                    "</label>" +
                                                    "</div>" +
                                                    "</div>";
                                            $("#chat").append(html);
                                        }
                                    });
                        }
                        $(document).ready(function () {
                            setInterval(chamaServicoLeitura, 3000);
                            $("#btnEnvio").click(
                                    function () {
                                        var amigoDeConversa = $("select option:selected").attr("value");
                                        var mensagem = $("#mensagem").val();
                                        $.post(
                                                "addMensagemRest.php", {
                                                    "destinatario": amigoDeConversa,
                                                    "mensagem": mensagem
                                                },
                                                function (dados) {
                                                    alert(dados);
                                                }
                                        );
                                    });
                        });
                    </script>

                    <form class="form-horizontal" action="addMensagem.php" method="post">
                        <!--NOVO DO OBJETIVO 2-->
                        <select id="destinatarioSelect" class="form-control" name="destinatario">
                            <?php
                            $result = $GLOBALS["db.connection"]->query(
                                    "select * from utilizador");
                            while ($row = $result->fetch_assoc()) {
                                ?>
                                <option value="<?php echo $row["id"] ?>">
                                    <?php echo $row["nome"] ?>
                                </option>    
                                <?php
                            }
                            ?>
                        </select>
                        <!--NOVO DO OBJETIVO 2-->

                        <input id="mensagem" placeholder="Coloque aqui a mensagem..." class="form-control" type="text" name="mensagem"/>
                        <!--SOLUCAO DAR ID E MUDAR O TYPE PARA button para nao submeter o form-->
                        <button id="btnEnvio" class="btn btn-success btn-xs" type="button">Enviar</button>
                    </form>
                </div>
            </div>
        </div>

    </body>
</html>

