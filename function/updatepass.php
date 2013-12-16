<?php
 include 'conexion.php';	//script de conexion a la base de datos
?>
<?php
session_start();
//Variables formulario
$pass=$_POST['pass'];
$pass2=$_POST['pass2'];
$md5a=md5($pass);
$md5b=md5($pass2);
$usu = $_SESSION['usuario'];
//si las constraseñas son iguales
if($pass == $pass2){  
	//Consulta
	$query= "UPDATE usuarios SET password='$md5a' WHERE usuario='$usu'";
	//Hacemos la consulta
	$resultado=mysqli_query ($connect, $query);
	header('Location:../perfil.php');
}
//si las constraseñas son distintas
else{ header('Location:../editpassdistintas.php'); }
?>