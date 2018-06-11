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
    <body>
        <div ng-init="inicializa()" id="postApp" class="container" ng-app="postApp" ng-controller="postController">

            <!--NOVO SOLUCAO todo o script é novo-->
            <script>

                        app.controller('postController', function ($scope) {
                            $scope.posts = [];
                            $scope.frases = "";
                            $scope.maxIdPost = 0;

                            $scope.inicializa = function ()
                            {
                                setInterval("angular.element($('#postApp')).scope().chamaServicoLeituraPosts()", 1000);
                            };


                            $scope.enviar = function (p)
                            {
                                //alert("Post on");
                                $.post(
                                        "addPostsRest.php",
                                        {
                                            "frases": $scope.frases

                                        },
                                        function (dados)
                                        {

                                        }
                                );
                                $scope.frases = '';
                            };

                            $scope.chamaServicoLeituraPosts = function ()
                            {

                                $.getJSON(
                                        "servicoLeituraPosts.php",
                                        {
                                            "maxIdPost": $scope.maxIdPost
                                        },
                                        function (jsonData)
                                        {
                                            //angular.element($("#chatApp")).scope().mensagens = jsonData;
                                            //angular.element($("#chatApp")).scope().$apply();


                                            if ($scope.maxIdPost == 0)
                                            {
                                                $scope.posts = jsonData;

                                                $scope.maxIdPost = $scope.posts[0]['idPost'];
                                            } else
                                            {
                                                $_postsAux = jsonData;

                                                if ($_postsAux.length > 0)
                                                {
                                                    for ($i = $_postsAux.length - 1; $i >= 0; $i--)
                                                    {
                                                        $scope.posts.unshift($_postsAux[$i]);
                                                    }

                                                    $scope.maxIdPost = $scope.posts[0]['idPost'];
                                                }
                                            }

                                            $scope.$apply();

                                        });
                            };

                            $scope.removeLike = function ($_idPost, $_meuLike)
                            {
                                $scope.mensagemErro = "";
                                $scope.maxIdPost = 0;

                                if ($_meuLike == '1')
                                {
                                    $.getJSON(
                                            "removeMeuLike.php",
                                            {
                                                "idPost": $_idPost
                                            },
                                            function (dados)
                                            {
                                                $scope.posts = "";
                                                //alert(dados);
                                                if (dados.resposta == false)
                                                {
                                                    $scope.mensagemErro = "ERRO DE COMUNICACAO";
                                                }
                                                //alert("dados: " + dados.resposta);
                                                $scope.chamaServicoLeituraPosts();
                                                $scope.$apply();

                                            },
                                            function () {
                                                $scope.mensagemErro = "ERRO DE COMUNICACAO";
                                                $scope.$apply();
                                            }
                                    );
                                }
                                if ($_meuLike == '0')
                                {

                                    $.getJSON(
                                            "doMeuLike.php",
                                            {
                                                "idPost": $_idPost
                                            },
                                            function (dados)
                                            {
                                                $scope.posts = "";
                                                //alert(dados);
                                                if (dados.resposta == false)
                                                {
                                                    $scope.mensagemErro = "ERRO DE COMUNICACAO";
                                                }
                                                //alert("dados: " + dados.resposta);
                                                $scope.chamaServicoLeituraPosts();
                                                $scope.$apply();

                                            },
                                            function () {
                                                $scope.mensagemErro = "ERRO DE COMUNICACAO";
                                                $scope.$apply();
                                            }
                                    );
                                }
                            };
                        });

            </script>

            <div class="col-md-12">
                <div class="well">
                    <form>
                        <div class="form-group">
                            <label for="comment">Em que estás a pensar?</label>
                            <textarea ng-model="frases" placeholder="Escreva aqui o seu post" class="form-control" rows="5" id="txtpost"></textarea>
                        </div>
                    </form>
                    <button ng-click="enviar()" type="button" class="btn btn-success">Enviar <span class="glyphicon glyphicon-send" type="button" /></button>
                </div>
            </div>
            <style>
                .post {
                    border: 1px solid lightgray;
                    padding:10px;
                }
            </style>

            <style>
                .post{
                    border: 1px solid lightgray;
                    padding:10px;
                }
            </style>

            <div class="panel panel-default">
                <div class='row' ng-repeat="p in posts" >
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel-footer">
                                    <span class="glyphicon glyphicon-user" id="start"></span> <label id="started">By</label> {{p.nome}} |
                                    <label id="started">{{p.data}}</label> |
                                    <a href="" ng-click="removeLike(p.idPost, p.meulike);" id="startedby"><img src="img/{{p.meulike}}.png" style="height: 10px;"/></a> {{p.likes}} | 
                                </div>
                                <div class="panel-body">
                                    <p>{{p.texto}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>            
        </div>   
    </body>
</html>


