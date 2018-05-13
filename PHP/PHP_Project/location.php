<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>ESTGP</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style.css">		
    </head>
    <body>
        <div id="container" class="clearfix">
            <?php
            include_once('./header.php');
            ?>
            <main>
                <div class="banner column-1">
                    <figure><img src="img/1.jpg" alt="imagem"></figure>
                </div>

                <section class="section_wrapper clearfix">
                    <h2>Localização</h2>
                    <div class="overlay">
                         <iframe width="100%" height="600" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=39.2684465%2C-7.4425144&key=AIzaSyCR-SSnvk0SUx5wsN5Xt3oGiSTZtFOSkYY" allowfullscreen></iframe>
                        <div class="overlay_banner">
                            <h2>Estamos aqui</h2>
                        </div>
                    </div>
                </section>
            </main>
            <?php
            include_once('./footer.php');
            ?>
        </div>
    </body>
</html>