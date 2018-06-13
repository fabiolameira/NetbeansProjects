<?php
include './mysql/mysqlConnect.php';
?>
<html>
    <head>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <script src="bootstrap/jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">

        <script src="angular/angular.min.js"></script>
    </head>
    <body ng-app="rootApp">
        <script>
            var minhasApps = [];
            var rootApp = angular.module('rootApp', minhasApps);
        </script>
        <?php
        include './header.php';
        ?>
        <?php
        if (!isset($_SESSION))
            session_start();
        $id = $_SESSION["id"];
        ?>

        <div ng-init="inicializa()" id="chatApp" class="container" ng-app="chatApp" ng-controller="chatController">

            <script>
                var app = angular.module('chatApp', []);
                minhasApps.push('chatApp');
                app.controller('chatController', function ($scope) {
                $scope.mensagens = [];
                $scope.amigoDeConversa = 0;
                $scope.mensagem = "";
                $scope.mensagemErro = "";
                $scope.inicializa = function()
                {
                setInterval("angular.element($('#chatApp')).scope().chamaServicoLeitura()", 1000);
                }

                $scope.envia = function()
                {

                $scope.mensagemErro = "";
                $.getJSON("addMensagemRest.php", {
                "destinatario" : $scope.amigoDeConversa,
                        "mensagem" :  $scope.mensagem
                },
                        function(dados)                        {
                        $scope.mensagem = "";
                        if (dados.resposta == false)
                        {
                        $scope.mensagemErro = "ERRO DE COMUNICACAO";
                        }
                        $scope.$apply();
                        },
                        function(){
                        $scope.mensagemErro = "ERRO DE COMUNICACAO";
                        $scope.$apply();
                        }
                );
                };
                $scope.chamaServicoLeitura = function()
                {
                    
                $.getJSON(
                        "servicoLeitura.php",
                {
                "amigoDeConversaId" : $scope.amigoDeConversa
                },
                        function(jsonData)
                        {
                        $scope.mensagens = jsonData;
                        $scope.$apply();
                        });
                }

                });
            </script>

            <div class="panel panel-default">
                <div class="panel-heading">
                    <a class="btn btn-success pull-right" href="chat.php"><span class="glyphicon glyphicon-refresh"/></a>
                </div>
                <div class="panel-body">

                    <style>
                        .chat{
                            border: 1px solid lightgray;
                            padding:10px;
                        }
                    </style>
                    <div class="chat" id="chat">
                        <div class='row' ng-repeat="m in mensagens" >
                            <div class='col-md-12'>
                                <label ng-class="{'pull-left': m.idAutor == <?php echo $id ?>,'pull-right' : m.idAutor != <?php echo $id ?>}">
                                    <label class='label' ng-class="{'label-success': m.idAutor == <?php echo $id ?>,'label-info' : m.idAutor != <?php echo $id ?>}"><!--Alterado SOLUCAO-->
                                        {{m.nomeAutor}}
                                    </label> - 
                                    {{m.data}}
                                    - 
                                    {{m.texto}} 
                                </label>
                            </div>
                        </div>
                    </div>

                    <select class="form-control" ng-model="amigoDeConversa">
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

                    <div ng-show="mensagemErro != ''" class="alert alert-danger">
                        {{mensagemErro}}
                    </div>
                    <input ng-model="mensagem"  placeholder="Coloque aqui a mensagem..." class="form-control" type="text" />
                    <button ng-click="envia()" class="btn btn-success btn-xs" type="button">Enviar</button>
                </div>
            </div>
        </div>D
    </body>
</html>

