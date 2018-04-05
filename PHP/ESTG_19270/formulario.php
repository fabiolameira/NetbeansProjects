<html>
    <head>
        <meta charset="UTF-8">
        <title>Formulário</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link href="CSS/css.css" rel="stylesheet" type="text/css"/>
        <script src="CSS/js.js" type="text/javascript"></script>
    </head>
    <body onload="init();">
        <div class="container clearfix">
            <?php
            include_once('./header.php');
            ?>
            <h1>Responde a este pequeno formulário</h1>
            </br> 
            <div class="container" >
                <div class="row" >
                    <div class="col-sm-3">
                        <h2>Formulário</h2>
                    </div>
                    <div class="col-sm-9">
                        <div class="well">
                            <form id="form">
                                <label for="name">Nome:</label>
                                <input type="text" class="form-control" id="name"> 
                                </br>
                                <label for="phone">Telemovel</label>
                                <input type="number" class="form-control" id="phone">
                                </br>
                                <label for="email">Email address:</label>
                                <input type="email" class="form-control" id="email">
                                </br>
                                <label for="pwd">Password:</label>
                                <input type="password" class="form-control" id="pwd">
                                </br>
                                <label> <input type="checkbox">Lembrar:</label>
                                </br>
                                <button id="button2" type="submit" class="btn btn-default">Submeter</button>
                            </form>
                        </div>
                        <br/>
                        <div class="alert alert-success alert-dismissable fade in" id="id2" >
                            <a href="#" class="close" data-dismiss="alert" aria-label="close"></a>
                            <h3 id="result1"></h3>
                            <h3 id="result2"></h3>
                            <h3 id="result3"></h3>
                            <h3 id="result4"></h3>
                        </div>
                    </div>
                </div>
            </div>
            <?php
            include_once('./footer.php');
            ?>
        </div>
    </body>
</html>