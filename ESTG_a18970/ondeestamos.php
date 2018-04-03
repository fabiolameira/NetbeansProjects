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
        <?php $page = "ondeestamos" ?>

        <?php
        include_once('./navbar.php');
        ?>

        <?php
        include_once('./carousel.php');
        ?>

        <div class="row">
            <div class="container">
                <div class="well">
                    <div class="col-sm-12"><h2>Onde Estamos?</h2></div>
                    <div class="map">
                        <iframe width="100%" height="450" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=39.268367,+-7.442280&key=AIzaSyCR-SSnvk0SUx5wsN5Xt3oGiSTZtFOSkYY" allowfullscreen></iframe>
                        <div class="map-box">
                            <h2>Estamos Aqui</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php
        include_once('./footer.php');
        ?>

    </body>
</html>