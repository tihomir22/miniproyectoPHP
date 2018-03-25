


<!DOCTYPE html>
<html>
<head>
	
	<title>Harambe sigue vivo</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="estilos/style.css">
</head>
<body id="container-fluid">
	<div id=wrapper>
		<header>
			<?php
			include "header.php";
			?>
		</header>
		<div id=nav>
			<?php
			include "nav.php";
			?>
		</div>
		<div id=contenido>
			<?php
			if(isset($_GET['seccion'])){
				if($_GET['seccion']=="inicio"){
					include "contenidoInicio.php";
				}
				if($_GET['seccion']=="datos"){
					include "contenidoDatos.php";
				}
				if($_GET['seccion']=='contacto'){
					include 'contenidoContacto.php';
				}
				if($_GET['seccion']=='login'){
					include 'login.php';
				}

			}else{
				
				echo '<div class="alert alert-success" role="alert" style="margin-bottom:-50px;">
				<strong>Bien hecho!</strong> Has accedido a nuestra pagina, para navegar clicka en uno de los links.
				</div>';
			}

			?>

		</div>

	</div>

</body>

</html>