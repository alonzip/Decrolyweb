<?php
session_start();
//Almacenamos en sesion usuario y password
$_SESSION['usuario']=$_POST['user'];
$_SESSION['password']=$_POST['pass'];
include 'conexion.php';          //script de conexion a la base de datos
?>
<?php
//Variables formulario
$name=$_POST['name'];
$user=$_POST['user'];
$pass=$_POST['pass'];
$pass2=$_POST['pass2'];
$day=$_POST['day'];
$month=$_POST['month'];
$year=$_POST['year'];
$date=$day.'/'.$month.'/'.$year;
$apellido=$_POST['apellido'];
$email=$_POST['email'];
$md5a=md5($pass);
$md5b=md5($pass2);
//ahora vamos a verificar si el tipo de archivo es un tipo de imagen permitido.
//y que el tamano del archivo no exceda los 2MB
$allowedExts = array("gif", "jpeg", "jpg", "png", "GIF", "JPEG", "JPG", "PNG");
$temp = explode(".", $_FILES["imagen"]["name"]);
$extension = end($temp);
if ((($_FILES["imagen"]["type"] == "image/gif")
|| ($_FILES["imagen"]["type"] == "image/jpeg")
|| ($_FILES["imagen"]["type"] == "image/jpg")
|| ($_FILES["imagen"]["type"] == "image/png"))
&& ($_FILES["imagen"]["size"] < 2000000)
&& in_array($extension, $allowedExts)){
/* Comprobar que realmente se ha enviado un archivo y que no está vacío */
if(isset($_FILES['imagen']) && $_FILES['imagen']['size']) {
   /* Nombre del archivo temporal con la imagen en el server */ 
   $tmp_name = $_FILES['imagen']['tmp_name'];
   /* Leer el archivo temporal de la imagen */
   $fp   = fopen($tmp_name, 'rb');
   //$data = fread($fp, $_FILES['image']['size']));
   $data = fread($fp, filesize($tmp_name));
   $data = addslashes($data); 
   fclose($fp);                            
  }} else {
    header('Location:../noimage.php');
    break;
  }
//Si las contaseñas son iguales
if($pass == $pass2){  
  //Consulta para insertar datos del formulario
  $query= "INSERT INTO usuarios(nombre, apellido, fecha_nacimiento, usuario, password, email, imagen)
  VALUES ('$name','$apellido','$date','$user','$md5a','$email', '$data')";
  //Hacemos la conexion y la consulta para sacar los usuarios
  $query2= mysqli_query($connect,"SELECT usuario FROM usuarios WHERE usuario = '$user'");
  $nr=mysqli_num_rows($query2);
  if ($nr != 0){
    header('Location:../usuarioexistente.php');
  }
  else {
    //si el usuario no existe 
    $resultado=mysqli_query ($connect, $query);
    header('Location:../perfil.php');
  }
}
//si las contraseñas son distintas nos lleva al formulario otra vez
else 
  { 
    header('Location:../passdistintas.php');
  }
?>