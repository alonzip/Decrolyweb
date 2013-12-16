<?php
	include 'function/funcionvalidacion.php';  //script de html validado
	xhtml_header("Cambiar Imagen");            //titulo de la pagina
?>
	<div id="editperfil">
		<h1>Cambiar Imagen</h1>
		<form action="function/updateimagen.php" method="post" enctype="multipart/form-data">
			<p>Foto</p>
			<input type="file" name="imagen" accept="image/*" required="required" />
			<input type="submit" alt="Guardar cambios" value="Guardar" />
		</form>
</body>
</html>
