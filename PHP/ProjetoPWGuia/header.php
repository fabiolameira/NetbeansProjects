<style>
    .header{
        background-color: #9acfea;   
        padding:10px;
        font-size: 16pt;
    }    
</style>
<div class="header clearfix">
    <?php
     if(!isset($_SESSION))
        session_start();
    $username = $_SESSION["username"];
    echo "Autenticado como $username - " . $_SESSION["fraseApresentacao"];
    ?>
    
    <?php include 'avisoChat.php';?>
    
    <a class="btn btn-danger pull-right" href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Sair</a>
</div>

