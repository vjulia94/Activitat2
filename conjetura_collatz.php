<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Menu</title>
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
<?php
	session_start();
?>
<div class="login">

		<div class="login-screen">
			<div class="app-title">
            <?php
				$usuari = $_SESSION['test'];
				echo "Hola,  $usuari";
			?>
				<h1>Conjetura collatz</h1>
				
				<?php
				$num = 67;
				 while($num!=1){
        if(num%2 == 0)
            $num = $num/2;
        else
            $num = $num*3 + 1;
       echo "%d ", $num;
    }
	
	?>
			</div>



			


           
		</div>
        
	</div>
  
  
</body>
</html>
