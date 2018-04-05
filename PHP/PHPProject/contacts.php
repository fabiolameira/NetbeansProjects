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
                    <h2>Deixe o seu contacto</h2>                   
                    <form class="form">
                        <div class="form-group">
                            <label for="name-input">Nome:</label>
                            <input type="text" id="name-input" placeholder="Introduza o seu nome" name="name-input" required>
                        </div>
                        <div class="form-group">
                            <label for="birth-date-input">Data de Nascimento:</label>
                            <input id="birth-date-input" type="date" name="birth-date-input" required>
                        </div>
                        <div class="form-group">
                            <label for="town-input">Localidade:</label>
                            <input type="text" id="town-input" placeholder="Introduza a sua localidade" name="town-input" required>
                        </div>
                        <div class="form-group">
                            <label for="email-input">Email:</label>
                            <input type="email" id="email-input" placeholder="Introduza o seu email" name="email-input" required>
                        </div>
                        <div class="form-group">
                            <label for="phone-input">Telefone:</label>
                            <input type="number" id="phone-input" placeholder="Introduza o nº de telefone" name="phone-input" required>
                        </div>    
                        <div class="form-group">
                            <input type="submit" value="Submeter">
                        </div>                
                    </form>
                </section>
            </main>
            <?php
            include_once('./footer.php');
            ?>
        </div>
    </body>
</html>