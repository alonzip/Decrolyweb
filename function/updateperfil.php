<?php
 include 'conexion.php';	//script de conexion a la base de datos
?>
<?php
session_start();
//Variables formulario
$name=$_POST['name'];
$apellido=$_POST['apellido'];
$email=$_POST['email'];
$usu = $_SESSION['usuario'];
//Consulta
$query= "UPDATE usuarios SET nombre='$name', apellido='$apellido', email='$email' WHERE usuario='$usu'";
//hacemos la conexion y la consulta para comprobar que el usuario no exista
$query2= mysqli_query($connect,"SELECT usuario FROM usuarios");
while($row=mysqli_fetch_array($query2)){
//si el usuario no existe
	if ($user != $row['usuario']) {
	//Hacemos la consulta
	$resultado=mysqli_query ($connect, $query);
	header('Location:../perfil.php');
	}
}
?>