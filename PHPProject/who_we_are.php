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
                    <h2>Quem somos</h2>
                    <div class="overlay">
                        <video width="100%" controls>
                            <source src="video/ESTG_vid.mp4" type="video/mp4">
                            Your browser does not support the <code>video</code> tag.
                        </video>  
                          <div class="overlay_banner">
                            <h2>A nossa escola</h2>
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