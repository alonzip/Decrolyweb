<?php
 include 'conexion.php';
?>
<?php
$query  = "SELECT * FROM usuarios WHERE id_usuario='".$_GET['id']."'";
$result = mysqli_query($connect, $query);
$row    = mysqli_fetch_array($result); 
$data   = $row['imagen'];

header('Content-type: image/jpeg');
echo $data;

mysqli_free_result($result);
mysqli_close($connect); 
?>