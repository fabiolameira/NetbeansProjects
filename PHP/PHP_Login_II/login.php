<html>
  <head>
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		
		
		
  </head>
  <body>
		
		<?php
                    
                    if(session_status()==PHP_SESSION_NONE) session_start();
                    
					$conecao = mysqli_connect("127.0.0.1", "root","", "chat");
                    if (mysqli_connect_errno()) {
                      echo "Falha a conectar ao MySQL: " . mysqli_connect_error();
                    } else if (isset($_POST["username"]) && isset($_POST["password"])) {
						
						$username = $_POST["username"];
						$password = $_POST["password"];
                    
						$sql = "SELECT * FROM utilizador where username = '" . $username . "' and password = '" . $password . "'";
						$result = $conecao->query($sql);

						if ($result->num_rows > 0) {
							$row = $result->fetch_assoc();
                            $_SESSION["username"]=$row['username'];
                            $_SESSION["fraseApresentacao"]="ola o meu nome é ".$row['nome']." e tenho " .$row['idade']. " anos";;
                            include("index.php");
						} else {
							$_SESSION["fraseApresentacao"]="Autênticação Falhada, Tente novamente";
							include("index.php");
						}
					
					} 
                    
                
                ?>
  </body>
</html>