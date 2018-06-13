<div id="indexApp" ng-app="indexApp" ng-controller="indexController" ng-init="inicializa()">

    <script>
                var app = angular.module('indexApp', []);
                minhasApps.push('indexApp');
                app.controller('indexController', function ($scope) {
                    $scope.totaisPorLer = 0;
                    $scope.inicializa = function () {
                        setInterval("angular.element($('#indexApp')).scope().verificaChat()", 1000);
                    }

                    $scope.verificaChat = function () {
                        $.getJSON(
                                "servicoContagemChat.php", {},
                                function (jsonData) {
                                    $scope.totaisPorLer = jsonData.total;
                                    $scope.$apply();
                                });
                    }
                });

    </script>

    <a href="chat.php">
        <div ng-show="totaisPorLer > 0" class="label label-success">
            <span class="glyphicon glyphicon-comment"></span>
            {{totaisPorLer}}
        </div>
    </a>
</div>
