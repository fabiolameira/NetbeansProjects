<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    </head>
    <body>
        <?php $page = "eng" ?>

        <?php
        include_once('./navbar.php');
        ?>

        <?php
        include_once('./carousel.php');
        ?>

        <div class="row">
            <div class="col-sm-12">
                <img class="featurette-image img-responsive center-block" src="img/giphy.gif" alt=""/>
            </div>
        </div>

        <?php
        include_once('./footer.php');
        ?>

    </body>
</html>