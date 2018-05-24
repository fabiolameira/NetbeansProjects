<html>
    <head>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <script src="bootstrap/jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <!-- style movido para o header.php -->
        <meta http-equiv="content-type" content="text/html; charset=ISO-8859-1">
    </head>
    <body>

        <div>


            <?php
            if (session_status() == PHP_SESSION_NONE)
                session_start();
            if (isset($_SESSION["username"])) {


                include './header.php';
                // codigo movido para o header.php faz parte da solução final
            } else {
                ?>

                <div class="panel panel-default">
                    <div class="panel-heading">Autênticação</div>
                    <div class="panel-body">
                        <form class="form-horizontal" action="login.php" method="POST">

                            <div class="form-group">
                                <label class="control-label col-sm-2">Username:</label>
                                <div class="col-sm-10"> 
                                    <input name="username" class="form-control" placeholder="Coloque o username">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-sm-2">Password:</label>
                                <div class="col-sm-10"> 
                                    <input type="password" name="password" class="form-control" placeholder="Coloque a password">
                                </div>
                            </div>

                            <button class="btn btn-success" type="submit"><span class="glyphicon glyphicon-log-in"></span> Entrar</button>

                        </form>
                    </div>

                </div>

                <?php
            }
            include './listaUtilizadores.php';
            ?>

            <a class="btn btn-info" href="novoUser.php">Novo Registo</a>

            <a class="btn btn-default" href="chat.php">Entrar no CHAT</a>


    </body>
</html>

