<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/solid.js" integrity="sha384-+Ga2s7YBbhOD6nie0DzrZpJes+b2K1xkpKxTFFcx59QmVPaSA8c7pycsNaFwUK6l" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/fontawesome.js" integrity="sha384-7ox8Q2yzO/uWircfojVuCQOZl+ZZBg2D2J5nkpLqzH1HY0C1dHlTKIbpRz/LG23c" crossorigin="anonymous"></script>
</head>
<body>
	<ul class="list-group">
		<li class="list-group-item active"><strong>Te llamas: </strong><?php echo $_POST['name']; ?></li>
		<li class="list-group-item" ><strong>Tu apellido es :</strong><?php echo $_POST['name2']; ?></li>
		<li class="list-group-item"><strong>Tu correo electronico es : </strong><?php echo $_POST['email'];?></li>
		<li class="list-group-item"><strong>Tu numero telefonico es : </strong><?php echo $_POST['phone'];?></li>
		<?php
			$texto=$_POST['message'];
			$palabras = explode(" ", $texto);

			echo '<h1>'."Introduciste ".(sizeof($palabras)-1)." palabras y son : ".'</h1>';
			for ($i=0; $i <sizeof($palabras) ; $i++) { 
				echo '<p class="btn-success btn-large" onclick="Hola";>'.$palabras[$i].'</p>';
			}

		?>

	</ul>
	<a href="proyecto.php">Volver al principio</a>
</body>
</html>









