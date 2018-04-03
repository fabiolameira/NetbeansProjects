<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

    </head>
    <body>
        <?php
        if (isset($_SESSION["username"])) {
            session_start();
            $username = $_SESSION["username"];
        } else {
            ?>
            <div class="col-sm-12">
                <div class="well">
                    <form class="form-horizontal" action="login.php" method="POST">
                        <div class="form-group">
                            <label for="username1">Username:</label>
                            <input type="username" class="form-control" name="username">
                        </div>
                        <div class="form-group">
                            <label for="pdw1">Password:</label>
                            <input type="password" class="form-control" name="password">
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox"> Lembrar</label>
                        </div>
                        <button type="submit" class="btn btn-success">Submeter</button>
                    </form>
                </div>
            </div>
            <?php
        }
        ?>
    </body>