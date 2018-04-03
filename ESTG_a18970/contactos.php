<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="css/js.js" type="text/javascript"></script>
    </head>
    <body onload="init();">
    <?php $page = "contactos" ?>

    <?php
    include_once('./navbar.php');
    ?>

    <?php
    include_once('./carousel.php');
    ?>

        <div class ="row">
          <div class="container">
            <div class="col-sm-12">
                <h2>Deixe-nos uma Mensagem :D</h2>
            </div>
            <div class="col-sm-8">
                <div class="well">
                    <form id="form">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                            <input id="email" type="text" class="form-control" name="email" placeholder="Email">
                        </div>
                        <br/>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input id="name" type="text" class="form-control" name="name" placeholder="Name">
                        </div>
                        <br/>
                        <div class="form-group">
                            <label for="comment">Mensagem:</label>
                            <textarea class="form-control" rows="5" id="comment"></textarea>
                        </div>
                        <div class="form-group">
                            <button id="buttoncontact" type="submit" class="btn btn-default">Submeter</button>
                        </div>
                    </form>
                </div>
                <br/>
                <div class="alert alert-success alert-dismissable fade in" id="id2" >
                    <a href="#" class="close" data-dismiss="alert" aria-label="close"></a>
                    <h3 id="result1"></h3>
                    <h3 id="result2"></h3>
                    <h3 id="result3"></h3>
                </div>
            </div>
            <div class="col-sm-4">
                <img id="logoestgform" class="img-responsive center-block" src="img/logo.png" alt="logoestg"/>
            </div>
        </div>
    </div>

    <?php
    include_once('./footer.php');
    ?>

</body>
</html>