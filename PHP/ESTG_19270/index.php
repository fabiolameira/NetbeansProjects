<html>
<head>
    <meta charset="UTF-8">
    <title>ESTG</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="CSS/css.css" rel="stylesheet" type="text/css"/>
    <script src="CSS/js.js" type="text/javascript"></script>
</head>
<body>
    <div class="c1">
        <div class="container-fluid">
            <div class="m1">
                <?php
                include_once('./header.php');
                ?>
            </div>
            <main>
                <div class="container-fluid">
                    <div class="column3">
                        <div id="myCarousel" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                <li data-target="#myCarousel" data-slide-to="1"></li>
                                <li data-target="#myCarousel" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner" role="listbox">
                                <div class="item active">
                                    <img class="first-slide" src="img/carousel1.jpg" alt="First slide">
                                    <div class="container">
                                        <div class="carousel-caption">
                                            <p><a class="btn btn-lg btn-primary" href="formulario.php" role="button">Responda ao formulário</a></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <img class="second-slide" src="img/carousel4.jpg" alt="Second slide">
                                    <div class="container">
                                        <div class="carousel-caption">
                                            <p><a class="btn btn-lg btn-primary" href="informacoes_escola.php" role="button">Learn more</a></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <img class="third-slide" src="img/carousel2.jpg" alt="Third slide">
                                    <div class="container">
                                        <div class="carousel-caption">
                                            <p><a class="btn btn-lg btn-primary" href="horario_primeiro.php" role="button">Horas aulas</a></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <img class="third-slide" src="img/carousel3.jpg" alt="fourth slide">
                                    <div class="container">
                                        <div class="carousel-caption">
                                            <p><a class="btn btn-lg btn-primary" href="informacao.php" role="button">More Info</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="container">
                    <div class="d1">
                        <div class="row" style="background-color: #ccffff">
                            <div class="col-sm-3 mycol2">
                                <div class="column1">
                                    <img src="img/estudante-feliz.jpg__700x600_q85_subsampling-2.jpg" alt="image">
                                </div>
                            </div>
                            <div class="col-sm-9">
                                <div class="column2">
                                    <h2>Instituito</h2>
                                    <p>O Instituto Politécnico de Portalegre é a Instituição
                                        Pública de Ensino Superior do Norte Alentejo que 
                                        cria, transmite e difunde o conhecimento, orientado
                                        profissionalmente, através da formação e qualificação,
                                        de alto nível, para públicos diferenciados, em momentos
                                        vários dos percursos académico e profissional, e da
                                        investigação e desenvolvimento tecnológico para a 
                                        promoção das comunidades, em cooperação com entidades
                                        regionais, nacionais e internacionais.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container">
                    <div class="d2">
                        <div class="row" style="background-color: #ccffff">
                            <div class="col-sm-3 ">
                                <div class="column4">
                                    <h2>Escolha</h2>
                                    <p>Escolhe a ESTG-IPPortalegre como ponto de 
                                        partida para o teu futuro.</p>
                                    <p>Aqui encontrarás as ferramentas indispensáveis para seres o que realmente 
                                        desejas ser.</p>
                                    <p>Não percas tempo!</p>
                                </div>
                            </div>
                            <div class="col-sm-9 mycol">
                                <div class="column5">
                                    <img src="img/2017_licenciaturas.png__850x600_q85_crop_subsampling-2_upscale.jpg" alt="oferta"/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
            </main>
           <?php
                include_once('./footer.php');
                ?>
        </div>  
    </div>
</body>   
</html>