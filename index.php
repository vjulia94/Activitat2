<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Login Form</title>
  
  
  
      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>
  <body>
	<div class="login">
		<div class="login-screen">
			<div class="app-title">
				<h1>Iniciar Sessió</h1>
			</div>
<form method="post" action="processa_login.php">
<div class="control-group">

			<div class="login-form">
				
				<p>
				  <input type="text" class="login-field" value="" placeholder="Usuari" id="username" name="username">
				  <label class="login-field-icon fui-user" for="login-name"></label>
		      </p>
			</div>

				<div class="control-group">
				<input type="password" class="login-field" value="" placeholder="Contrasenya" id="password" name="password">
                <?php
                 if (isset($_COOKIE['validaciono'])) {
			echo '<p>Usuari o contrasenya incorrecte!</p>';
		}
		?>
				<label class="login-field-icon fui-lock" for="login-pass"></label>
				</div>
				<input class="btn btn-primary btn-large btn-block" type="submit">
    
			</div>
               </form>
		</div>
        
	</div>
</body>
  
  
</body>
</html>
