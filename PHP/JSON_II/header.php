<?php
if(session_status() == PHP_SESSION_NONE)session_start();
?>
<style>
    .header{
        background-color: #9acfea;
        padding: 10px;
        font-size: 16pt;
    }
</style>

<div class="header clearfix">
    <?php
    $username = $_SESSION["username"];
    echo "Autenticado como $username - " . $_SESSION["fraseApresentacao"];
    ?>

    <a class="btn btn-danger pull-right" href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Sair</a>
</div>
