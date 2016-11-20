<?php 
 include("validacio.php"); ?> 


<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Menu</title>
  <link rel="stylesheet" href="css/style.css">
</head>

<body>

<div class="login">
<?php
session_start();
?>
		<div class="login-screen">
			<div class="app-title">
            <?php

			/*if($_SESSION["autentica"] != "SIP")
				{ 
				
				  header("Location: index.php"); 
				  exit(); 
				} 
*/
				$usuari = $_SESSION['test'];
				echo "Hola,  $usuari";
			?>
				<h1>Menú</h1>
			</div>



			<div class="login-form">
				
              <p><a href="comprovar_divisors.php">Comprovar divisors</a></p>
                <p><a href="conjetura_collatz.php">Conjetura collatz</a></p>
                <p><a href="sortir.php">Sortir</a></p>
			</div>


           
		</div>
        
	</div>
  
  
</body>
</html>
