<?php
	include 'function/funcionvalidacion.php';  //script de html validado
	xhtml_header("Cambiar Contraseña");        //titulo de la pagina
?>
	<div id="editperfil">
		<h1>Contraseñas Distintas</h1>
		<form action="function/updatepass.php" method="post" enctype="multipart/form-data">
			<p class="error">Contraseña</p>
			<input required="required" class="text error" name="pass" type="password" placeholder="Contraseña" />
			<p class="error">Repetir contraseña</p>
			<input required="required" class="text error" name="pass2" type="password" placeholder="Repetir Contraseña" />
			<input type="submit" alt="Guardar cambios" value="Guardar"/>
		</form>
</div>
</div>
</body>
</html>