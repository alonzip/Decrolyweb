<?php
	if(isset($_COOKIE['cookieusername']) && isset($_COOKIE['cookiepass']))
	    { 
	      setcookie('cookieusername', $_COOKIE['cookieusername'], time() + 365 * 24 * 60 * 60, '/');  
	      setcookie('cookiepass', $_COOKIE['cookiepass'], time() + 365 * 24 * 60 * 60, '/');
	      header('Location:perfil.php');
	    }

	include 'function/funcionvalidacionlogin.php';	//scrip de html validado
	xhtml_header("Iniciar sesión");				//titulo de la pagina
?>
		<div id="login">
			<h1>INICIAR SESIÓN</h1>
			<form action="function/logeo.php" method="post">
				<p>
					<input class="text" name="user" type="text" placeholder=" Usuario"/>
				</p>
				<p>
					<input class="text" name="pass" type="password" placeholder=" Contraseña"/>
				</p>
				<p>
					<input type="checkbox" name="recordar">Recordar
				</p>
				<p>
					<a href="">Olvidé mi contraseña</a>
				</p>
				<p>
					<input type="submit" alt="Iniciar sesión" name="iniciar">
				</p>
			</form>
			<p>¿No estas registrado?</p>
			<p>
				<a href="registros.php">Regístrate ahora >></a>
			</p>
		</div>
	</div>
	</div>
</body>
</html>
