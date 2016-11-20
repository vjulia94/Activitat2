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
				<h1>Comprovar divisors</h1>
                
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
				<h1>Comprovar divisors</h1>
                
                
			</div>

<?php
primer(45);
function primer($num){
$cont = 0;
for($i = 1; $i <= $num; $i++){
if($num % $i == 0){
echo "$i <br>";
$cont++;
}
}

if($cont==2){
	echo "$num Es primer";
return true;
}
else{
	echo "$num no es primer";
return false;
}
}
?>

			


           
		</div>
        
	</div>
  
  
</body>
</html>

			</div>



			


           
		</div>
        
	</div>
  
  
</body>
</html>
