<?php
session_start();

$_POST['submit'] = true;

if (isset($_POST['submit']))
    {

    $usuaris = array('admin','usuari1','usuari2','usuari3');
    $contrasenyes = array('admin','pass1','pass2','pass3' );
    if(in_array($_POST['username'], $usuaris))
    {
       $contrasenya = array_search($_POST['username'], $usuaris);

       if($contrasenyes[$contrasenya]==$_POST['password'])
       {
		 $_SESSION["autentica"] = "SIP";
		 $_SESSION['test'] = $_POST['username'];
		 
		 header("Location: menu.php");
      
		 
		 setcookie('validacio', 'si');
		 setcookie('validaciono', '', time() - 1000);
		 
		 if (isset($_COOKIE['validacio'])) {
			 
			echo "La validació ha estat correcte.";
			
		}

		 
		 
		 
       } else 
        {
			header("Location: index.php");
		  setcookie('validaciono', 'no');
        }
		
				


    }

    }
else 
{
  echo "Login form";
}
?>