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
        <?php
        include './header.php';
        ?>

        <?php
        if (session_status() == PHP_SESSION_NONE)
            session_start();
        $id = $_SESSION["id"];
        ?>

        <div class="col-md-12">
            <div class="well">
                <form>
                    <div class="form-group">
                        <label for="comment">Em que estás a pensar?</label>
                        <textarea class="form-control" rows="5" id="comment"></textarea>
                    </div>
                </form>
                <button type="button" class="btn btn-success">Enviar <span class="glyphicon glyphicon-send" type="button" /></button>
            </div>
        </div>
        <style>
            .post {
                border: 1px solid lightgray;
                padding:10px;
            }
        </style>

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

    </body>
</html>