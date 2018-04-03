<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>

        <!-- ex_6 -->

        <?php
        session_start();
        if (isset($_SESSION["username"])) {
            $username = $_SESSION["username"];
            echo "Autenticado como $username - " . $_SESSION["fraseApresentacao"];
            ?>
            <a class="btn btn-danger" href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Sair</a>
            <?php
        } else {

            if (isset($_SESSION["fraseApresentacao"])) {
                echo "<div class='alert alert-warning'>" . $_SESSION["fraseApresentacao"] . "</div>";
                ?>
                <?php
            }
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
?>


    </body>
</html>

