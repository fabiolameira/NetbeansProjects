<html>
  <head>
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		
		
		
  </head>
  <body>
		
		<?php
                    require_once './estudante.php';
                    
                    session_start();
                    
                    $username = $_POST["username"];
                    $password = $_POST["password"];
                    
                    $found = false;
                    foreach($estudantes as $e)
                    {
                        if($username == $e->getUsername() && $password == $e->getPassword()){
                            $found = true;
                            session_start();
                            $_SESSION["username"]=$e->getUsername();
                            $_SESSION["fraseApresentacao"]=$e->fraseApresentacao();
                            include("index.php");
                            break;
                        }  
                    }
                    if(!$found)
                    {
                        $_SESSION["fraseApresentacao"]="Autênticação Falhada, Tente novamente";
                        include("index.php");    
                    }
                        
                    
                
                ?>
  </body>
</html>