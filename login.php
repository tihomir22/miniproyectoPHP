<?php
if(isset($_POST['login'])){
	$fp=fopen("passwd.txt", "r");
	while(!feof($fp)){
		$linea=fgets($fp);
		$arrayL=explode(":", $linea);

		if($_POST['user']==$arrayL[0] && $_POST['pass']==$arrayL[1]){
			$pass=md5($_POST['pass']);
			echo '<div class="alert alert-success" role="alert">
			<strong>Bienvenido!</strong>
			'.$_POST['user']." y tu contraseña fue ".$pass." (esta encriptada)".'</div>';
			break;
		}
		if(feof($fp)){
			echo '<div class="alert alert-danger" role="alert">Tus credenciales son incorrectas!</div>';
		}

	}
	
	



}

?>


<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link rel="stylesheet" type="text/css" href="estilos/style.css">


<div class="container">
	<br>
	<div class="loginmodal-container">
		<h1>Introduce tus datos</h1><br>
		<form method="post" action="proyecto.php?seccion=login">
			<input type="text" name="user" placeholder="Usuario" required="">
			<input type="password" name="pass" placeholder="Contraseña" required="">
			<input type="submit" name="login" class="login loginmodal-submit" value="Login">
		</form>


	</div>
	<br>
</div>
</div>