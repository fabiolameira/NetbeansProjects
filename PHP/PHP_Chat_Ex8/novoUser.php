<html>
    <head>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <script src="bootstrap/jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="panel panel-default">
            <div class="panel-heading">Registo</div>
            <div class="panel-body">
                <form class="form-horizontal" action="novoUserAction.php" method="POST">

                    <div class="form-group">
                        <label class="control-label col-sm-2">Username:</label>
                        <div class="col-sm-10"> 
                            <input name="username" class="form-control" placeholder="Coloque o username">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2">Email:</label>
                        <div class="col-sm-10"> 
                            <input name="email" class="form-control" placeholder="Coloque a email">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2">Password:</label>
                        <div class="col-sm-10"> 
                            <input type="password" name="password" class="form-control" placeholder="Coloque a password">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2">Nome:</label>
                        <div class="col-sm-10"> 
                            <input name="nome" class="form-control" placeholder="Coloque o nome">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2">Telefone:</label>
                        <div class="col-sm-10"> 
                            <input name="telefone" class="form-control" placeholder="Coloque o telefone">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2">Morada:</label>
                        <div class="col-sm-10"> 
                            <input name="morada" class="form-control" placeholder="Coloque a morada">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2">Idade:</label>
                        <div class="col-sm-10"> 
                            <input name="idade" class="form-control" placeholder="Coloque a idade">
                        </div>
                    </div>

                    <button class="btn btn-success" type="submit"><span class="glyphicon glyphicon-log-in"></span> Entrar</button>

                </form>
            </div>

        </div>
    </body>
</html>