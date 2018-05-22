<?php
//incluir o ficheiro mysqConnect para abrir ligação a mysql
include './mysql/mysqlConnect.php';
?>
<html>
    <head>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <script src="bootstrap/jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="angular/angular.min.js"></script>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    </head>
    <body>
        <?php
        include './header.php';
        ?>

        <!--COLOCAR AQUI neste div AS DECLARACOES DO ANGULAR ng-app ng-controller e id-->
        <div class="container" ng-app="chatApp" ng-controller="chatController" id="chatApp">

            <script>
                var app = angular.module('chatApp', []);
                app.controller('chatController', function ($scope) {
                $scope.mensagens = [];
                });
            </script>

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
                    if (session_status() == PHP_SESSION_NONE)
                        session_start();
                    $id = $_SESSION["id"];
                    ?>


                    <div class="chat" id="chat">

                        <div class='row' ng-repeat="m in mensagens">
                            <div class='col-md-12'>
                                <label ng-class="{'pull-left': m.idAutor == <?php echo $id ?>,'pull-right' : m.idAutor != <?php echo $id ?>}">
                                    <label class='label' ng-class="{'label-success': m.idAutor == <?php echo $id ?>,'label-info' : m.idAutor != <?php echo $id ?>}">
                                        {{m.nomeAutor}}
                                    </label>
                                    {{m.data}}
                                    {{m.texto}}
                                </label>
                            </div>
                        </div>

                    </div>

                    <!--SOLUCAO todo o script faz parte da solução-->
                    <script>
                        function chamaServicoLeitura()
                        {
                        var amigoDeConversa = $("select option:selected").attr("value");
                        $.getJSON(
                                "servicoLeitura.php",
                        {
                        "amigoDeConversaId": amigoDeConversa
                        },
                                function (jsonData)
                                {
                                angular.element($("#chatApp")).scope().mensagens = jsonData;
                                angular.element($("#chatApp")).scope().$apply();
                                //NO EXERCICIO NO PONTO 12
                                //COMENTAR DAQUI ATÉ AO PROXIMO COMENTARIO
                                //de modo a ficar apenas com as chamadas ao angular
                                //dentro da function(jsonData)

//                                                $("#chat").empty();
//                                                for (m in jsonData)
//                                                {
//                                                    var msg = jsonData[m];
//                                                    var pull = "pull-right";
//                                                    var infoStyle = "label-info";
//                                                    if (msg.idAutor == <?php echo $id ?>)
//                                                    {
//                                                        pull = "pull-left";
//                                                        infoStyle = "label-success";
//                                                    }
//
//                                                    var html = "<div class='row'>" +
//                                                            "<div class='col-md-12'>" +
//                                                            "<label class='" + pull + "'>" +
//                                                            "<label class='label " + infoStyle + "'>" +
//                                                            msg.idAutor +
//                                                            "</label> - " +
//                                                            msg.data +
//                                                            " - " +
//                                                            msg.texto +
//                                                            "</label>" +
//                                                            "</div>" +
//                                                            "</div>";
//                                                    $("#chat").append(html);
//                                                }
                                //COMENTAR ATÉ AQUI



                                });
                        }
                        $(document).ready(function () {
                            setInterval(chamaServicoLeitura, 3000);
                            $("#btnEnvio").click(function () {
                                    var amigoDeConversa = $("select option:selected").attr("value");
                                    var mensagem = $("#mensagem").val();
                                    $("#mensagem").val("");
                                    $.post("addMensagemRest.php",{
                                            'destinatario':amigoDeConversa,
                                            'mensagem':mensagem
                                    });
                            });
                        });
                    </script>
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
                </div>
            </div>

        </div>

    </body>
</html>

