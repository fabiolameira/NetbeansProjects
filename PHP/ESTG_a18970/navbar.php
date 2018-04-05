<div class="navbar-wrapper">
    <div class="container">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php"><img src="img/logo.png" alt="ESTG Logo"></a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="<?php echo ($page == "home" ? "active" : "")?>"><a href="index.php">Home</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Cursos <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li class="<?php echo ($page == "eng" ? "active" : "")?>"><a href="/engenhariainformatica.php">Licenciatura de Engenharia Informática</a></li>
                                <li class="<?php echo ($page == "dwdm" ? "active" : "")?>"><a href="/dwdm.php">CTeSP Desenvolvimento Web e Dispositivos Móveis</a></li>
                            </ul>
                        </li>
                        <li class="<?php echo ($page == "quemsomos" ? "active" : "")?>"><a href="/quemsomos.php">Quem Somos</a></li>
                        <li class="<?php echo ($page == "ondeestamos" ? "active" : "")?>"><a href="/ondeestamos.php">Onde Estamos</a></li>
                        <li class="<?php echo ($page == "contactos" ? "active" : "")?>"><a href="/contactos.php">Contactos</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</div>