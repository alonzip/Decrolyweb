<?php
session_start();
//Almacenamos en sesion usuario y password
$_SESSION['usuario']=$_POST['user'];
$_SESSION['password']=$_POST['pass'];

//Si el checkbox de recordar esta activo almacenamos las cookies en el navegador
if(isset($_POST['recordar'])==1){
//Si la cookie esta almacenada la actualizamos
  if(isset($_COOKIE['cookieusername']) && isset($_COOKIE['cookiepass']))
    { 
      setcookie('cookieusername', $_COOKIE['cookieusername'], time() + 365 * 24 * 60 * 60, '/');  
      setcookie('cookiepass', $_COOKIE['cookiepass'], time() + 365 * 24 * 60 * 60, '/');
    } 
//Solo se almacenara la primera vez
  else
    { 
     setcookie('cookieusername', $_POST['user'], time() + 365 * 24 * 60 * 60, '/');
     setcookie('cookiepass', $_POST['pass'], time() + 365 * 24 * 60 * 60, '/');
    }
}
?>
<?php
 include 'conexion.php';           //script de conexion a la base de datos
?>
<?php
//Variables formulario
$user = $_POST['user'];
$pass = $_POST['pass'];
$md5 = md5($pass);

//Consulta de usuario y password
$query="SELECT * FROM usuarios WHERE usuario='$user' and password='$md5'";
$rs=mysqli_query($connect, $query);
$row=mysqli_fetch_object($rs);
$nr=mysqli_num_rows($rs);
//Si existe usuario
if($nr == 1){
  header('Location:../perfil.php');
}
//Si no existe usuario
else if($nr <= 0){
	header ('Location:../index.php');
}
mysqli_close($connect);
?>