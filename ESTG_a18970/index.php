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
        <?php $page = "home" ?>

        <?php
        include_once('./navbar.php');
        ?>

        <?php
        include_once('./carousel.php');
        ?>

        <div class="container marketing">
            <div class="row">
                <div class="col-lg-4">
                    <img class="img-circle" src="img/escola.jpg" alt="Foto da Escola" width="140" height="140">
                    <h2>A nossa escola</h2>
                    <p>Saiba mais sobre a nossa escola e veja as fotos da Galeria.</p>
                    <p><a class="btn btn-default" href="#" role="button">Ver Mais</a></p>
                </div>
                <div class="col-lg-4">
                    <img class="img-circle" src="img/cooperacao.jpg" alt="Generic placeholder image" width="140" height="140">
                    <h2>Cooperação</h2>
                    <p>Consulte aqui as atividades em que estamos envolvidos.</p>
                    <p><a class="btn btn-default" href="#" role="button">Ver Mais</a></p>
                </div>
                <div class="col-lg-4">
                    <img class="img-circle" src="img/servicos.jpg" alt="Generic placeholder image" width="140" height="140">
                    <h2>Serviços</h2>
                    <p>Consulte aqui os nossos Serviços que prestamosm junto da Comunidade.</p>
                    <p><a class="btn btn-default" href="#" role="button">Ver Mais</a></p>
                </div>
            </div>

            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7">
                    <h2 class="featurette-heading">Abertas Candidaturas<br>a Estudante Internacional 2018-19</h2>
                    <p class="lead"><br>Estão abertas as candidaturas a Estudente Internacional ao abrigo do respetivo Estatuto. A Primeira Fase de Candidaturas decorre de 15 de janeiro a 31 de março de 2018. Para Informações e candidatura, ver em:<br> <a href="http://www.ipportalegre.pt/pt/ipp/cooperacao-institucional/brasil/" target="blank">http://www.ipportalegre.pt/pt/ipp/cooperacao-institucional/brasil/</a></p>
                </div>
                <div class="col-md-5">
                    <img class="featurette-image img-responsive center-block" src="img/escola.jpg"  alt="Imagem Candidaturas">
                </div>
            </div>

            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7 col-md-push-5">
                    <h2 class="featurette-heading">Application by International Students now open</h2>
                    <p class="lead"><br>The first period of application by International Students seeking a degree at IPP is now open, from 15 January to 31 March 2018. All Information and application form can be found at: <a href="http://www.ipportalegre.pt/pt/ipp/cooperacao-institucional/international-en-prov/#Application" target="blank">http://www.ipportalegre.pt/pt/ipp/cooperacao-institucional/international-en-prov/#Application</a></p>
                </div>
                <div class="col-md-5 col-md-pull-7">
                    <img class="featurette-image img-responsive center-block" src="img/foto3.jpg" alt="Foto">
                </div>
            </div>

            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7">
                    <h2 class="featurette-heading">Viver Conhecer Sentir</h2>
                    <p class="lead"><br>Aqui, o Norte abraça o Sul e o homem funde-se com a natureza num entendimento secular. A paisagem é arrumada, limpa, seja rural ou urbana, como limpos são os seus ares e cristalinas as águas. No topo dos montes espreita o casario abraçado de muralhas: parece temer, ainda, algum assalto.<br><br>Só a matriz se sobreleva, protectora, projectando o branco açucarado da cal no azul absoluto do céu. Vive aqui um povo dócil, sinceramente hospitaleiro, que surpreende pelas suas artes e que ultrapassou as vicissitudes da história com uma dignidade ímpar.</p>
                </div>
                <div class="col-md-5">
                    <img class="featurette-image img-responsive center-block" src="img/marvao.jpg" alt="Foto">
                    <br>
                    <img class="featurette-image img-responsive center-block" src="img/xevora.jpg" alt="Foto">
                </div>
            </div>

            <hr class="featurette-divider">

        </div>

        <?php
        include_once('./footer.php');
        ?>

    </body>
</html>
