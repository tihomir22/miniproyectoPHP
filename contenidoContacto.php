

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<title>Harambe sigue vivo</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/solid.js" integrity="sha384-+Ga2s7YBbhOD6nie0DzrZpJes+b2K1xkpKxTFFcx59QmVPaSA8c7pycsNaFwUK6l" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/fontawesome.js" integrity="sha384-7ox8Q2yzO/uWircfojVuCQOZl+ZZBg2D2J5nkpLqzH1HY0C1dHlTKIbpRz/LG23c" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="estilos/style.css">
<body><br>

	<form class="form-horizontal" method="post" action="procesarContacto.php">
		<fieldset><br>
			<legend class="text-center header">Contacto</legend>

			<div class="form-group">
				<span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
				<div class="col-md-8">
					<input id="fname" name="name" type="text" placeholder="Nombre" class="form-control" required>
				</div>
			</div>
			<div class="form-group">
				<span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
				<div class="col-md-8">
					<input id="lname" name="name2" type="text" placeholder="Apellidos" class="form-control" required>
				</div>
			</div>

			<div class="form-group">
				<span class="col-md-1 col-md-offset-2 text-center"><i class="fas fa-envelope-open"></i></span>
				<div class="col-md-8">
					<input id="email" name="email" type="text" placeholder="Correo electronico" class="form-control" required>
				</div>
			</div>

			<div class="form-group">
				<span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-phone-square bigicon"></i></span>
				<div class="col-md-8">
					<input id="phone" name="phone" type="tel" placeholder="Telefono" class="form-control">
				</div>
			</div>

			<div class="form-group">
				<span class="col-md-1 col-md-offset-2 text-center"><i class="fas fa-envelope-open"></i></span>
				<div class="col-md-8">
					<textarea class="form-control" id="message" name="message" placeholder="Introduce tu mensaje aqui, te responderemos en un maximo de 2 dias laborales ." rows="7" required></textarea>
				</div>
			</div>

			<div class="form-group">
				<div class="col-md-12 text-center">
					<input type="submit" value="Enviar" name="submit2" class="btn-primary"></input>
				</div>
			</div>
		</fieldset>
	</form>














</body>
</html>