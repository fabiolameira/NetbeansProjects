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
        <?php $page = "quemsomos" ?>

        <?php
        include_once('./navbar.php');
        ?>

        <?php
        include_once('./carousel.php');
        ?>

        <div class="row">
            <div class="container">
                <div class="well">
                    <div class="col-sm-12"><h2>Quem somos?</h2></div>
                    <div class="vid">
                        <video width="100%" height="100%" controls>
                            <source src="VID/ESTG_vid.mp4" type="video/mp4">
                            Your browser does not support the <code>video</code> tag.
                        </video>
                        <div class="vid-box">
                            <h2>A nossa Escola</h2>
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