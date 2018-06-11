<style>
    .header{
        background-color: #9acfea;   
        padding:10px;
        font-size: 16pt;
    }    
</style>
<div class="header clearfix">
    <div class="col-sm-8">
        <?php
        if (session_status() == PHP_SESSION_NONE)
            session_start();
        $username = $_SESSION["username"];
        echo "Autenticado como $username - " . $_SESSION["fraseApresentacao"];
        ?>
    </div> 
    
    <?php include 'avisoChat.php'; ?>﻿

    <div class="col-sm-4" class="pull-right">
        <a class="btn btn-danger pull-right" href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Sair</a>
        <?php
        ?>
        <a class="btn btn-default pull-right" href="index.php">Entrar no Feed</a>
        <?php
        ?>
        <a class="btn btn-default pull-right" href="chat.php">Entrar no CHAT</a>
        <?php
        ?>
    </div>
</div>