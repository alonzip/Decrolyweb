<?php
	include 'function/funcionvalidacion.php';	//script de html validado
	xhtml_header("Mi Perfil");					//titulo de la pagina
	include 'function/conexion.php';			//script de conexion a la base de datos
?>
<?php
//Variables de sesion
$usu = $_SESSION['usuario'];

//Consulta de usuario
$query="SELECT id_usuario, nombre, apellido, email, fecha_nacimiento, imagen FROM usuarios WHERE usuario='$usu'";
//hacemos la conexion y la consulta
$rs=mysqli_query($connect, $query);
//sacamos los datos de la tabla
while ($rew=mysqli_fetch_array($rs)) {
      $nombre=$rew['nombre'];
      $apellido=$rew['apellido'];
      $email=$rew['email'];
      $date=$rew['fecha_nacimiento'];
      $image=$rew['imagen'];
      $id=$rew['id_usuario'];
      }
$row=mysqli_fetch_object($rs);
$nr=mysqli_num_rows($rs);
mysqli_close($connect);
?>
	<div id="perfil">
		<h1>Mi Perfil</h1>
			<div id="avatar">
				<img src="function/imagen.php?id=<?php echo $id;?>" alt="Foto"/>
			</div>
			<div id="userinfo">
				<p>
					<?php echo "Hola $nombre $apellido<br/>Tu correo: $email<br/>Nacistes: $date<br/>"; ?>
				</p>
			</div>
			<div class="clear"></div>
			<div id="userfunctions">
				<a href="editperfil.php">Editar Perfil</a>
				<a href="editpass.php">Cambiar Contraseña</a>
				<a href="editimagen.php">Cambiar Foto</a>
				<a href="function/logout.php">Cerrar Sesión</a>
			</div>
	</div>
</div>
</div>
</body>
</html>