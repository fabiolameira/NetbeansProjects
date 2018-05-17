<div class="header clearfix" style="padding: 10px; font-size: 16pt">
    <?php
    $username = $_SESSION["username"];
    echo "Autenticado como $username - " . $_SESSION["fraseApresentacao"];
    ?>

    <a class="btn btn-danger pull-right" href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Sair</a>
</div>