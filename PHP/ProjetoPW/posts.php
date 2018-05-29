<html>
    <head>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <script src="bootstrap/jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <!-- style movido para o header.php -->
        <meta http-equiv="content-type" content="text/html; charset=ISO-8859-1">
    </head>
    <body>
        <?php
        include './header.php';
        ?>

        <div class="col-sm-12">
            <div class="well">
                <form>
                    <div class="form-group">
                        <label for="comment">Em que estás a pensar?</label>
                        <textarea class="form-control" rows="5" id="comment"></textarea>
                        <button type="button" class="btn btn-info">Postar</button>
                    </div>
                </form>
            </div>
        </div>

    </body>
</hmlt>
