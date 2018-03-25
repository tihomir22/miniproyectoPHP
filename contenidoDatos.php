
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<title>Harambe sigue vivo</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/solid.js" integrity="sha384-+Ga2s7YBbhOD6nie0DzrZpJes+b2K1xkpKxTFFcx59QmVPaSA8c7pycsNaFwUK6l" crossorigin="anonymous"></script>
<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/fontawesome.js" integrity="sha384-7ox8Q2yzO/uWircfojVuCQOZl+ZZBg2D2J5nkpLqzH1HY0C1dHlTKIbpRz/LG23c" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="estilos/style.css">;
<body>
	<br>
	<img class="img-fluid" src="estilos/harambePa.jpg" width="500px" height="500px" style="position: relative;left: 25%">
	<form style="width: 50%;position: relative;left: 25%;" method="post" action="procesarDatos.php">
		<div class="form-group">
			<label for="formGroupExampleInput">Cual es tu nombre?</label>
			<i class="fas fa-address-card"></i>
			<input type="text" class="form-control" id="formInput1" name="nombre" placeholder="Introduzca su nombre">
		</div>
		<div class="form-group">
			<label for="formGroupExampleInput2">Cual es tu apellido?</label>
			<i class="fas fa-address-card"></i>
			<input type="text" class="form-control" id="formInput2" name="apellido" placeholder="Introduzca sus apellidos">
		</div>
		<div class="form-group">
			<label for="formGroupExampleInput2">Pretendes ayudar a la causa?(Proteccion del medio ambiente)</label>
			<i class="fas fa-leaf"></i><br>
			<input type="radio" name="radio1" value="si">Si<br>
			<input type="radio" name="radio1" value="no">No<br>
			<input type="radio" name="radio1" value="ayudare">Ayudaré pero no economicamente<br>
		</div>
		<div class="form-group">
			<label>De que forma ayudarás?</label>
			<i class="fas fa-question"></i><br>

			<input type="checkbox" name="chk1[]" value="total">Pretendo financiar cualquier campaña a favor del ecologismo <br>
			<input type="checkbox" name="chk1[]" value="semi">Pretendo ser voluntario y participar activamente en campañas<br>
			<input type="checkbox" name="chk1[]" value="noob">Pretendo compartir informacion a seres queridos y familiares<br>
			<input type="checkbox" name="chk1[]" value="moral">Apoyo moral<br>

		</div>
		<div class="form-group">
			<label>Harambe es...<i class="fas fa-question"></i></label>
			<select name="formEstados">
				<option value="SM" name="h1">Semidios</option>
				<option value="DA" name="h2">Dios del amor</option>
				<option value="BS" name="h3">Buscado</option>
				<option value="SH" name="h4">SemiHumano</option>
				<option value="ML" name="h5">Mala gente</option>
			</select>
		</div>
		<input class="btn btn-primary btn-lg" type="submit" name="submit">
	</form>
</body>
</html>