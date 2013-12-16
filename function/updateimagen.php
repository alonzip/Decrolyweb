<?php
 include 'conexion.php';  //script de conexion a la base de datos
?>
<?php
session_start();
//Variables de sesion
$usu = $_SESSION['usuario'];
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
    header('Location:../noeditimage.php');
    break;
  }
//Consulta
$query= "UPDATE usuarios SET imagen='$data' WHERE usuario='$usu'";
//Hacemos la consulta
$resultado=mysqli_query ($connect, $query);
header('Location:../perfil.php');
?>