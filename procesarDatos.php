<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/solid.js" integrity="sha384-+Ga2s7YBbhOD6nie0DzrZpJes+b2K1xkpKxTFFcx59QmVPaSA8c7pycsNaFwUK6l" crossorigin="anonymous"></script>
	<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/fontawesome.js" integrity="sha384-7ox8Q2yzO/uWircfojVuCQOZl+ZZBg2D2J5nkpLqzH1HY0C1dHlTKIbpRz/LG23c" crossorigin="anonymous"></script>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-sm-6 col-md-4">
				<div class="alert alert-success" role="alert"><strong>Su nombre es :</strong><?php 
				echo $_POST['nombre'];
				echo '<br>';
				echo '<img src="estilos/myAvatar2.png" width=330px>';


				?></div>
			</div>
			<div class="col-sm-6 col-md-4">
				<div class="alert alert-success" role="alert"><strong>Su nombre es :</strong><?php echo $_POST['apellido'];
				echo '<img src="estilos/myAvatar.png" width=330px>';
				?></div>


			</div>
			<div class="col-sm-12 col-md-4">
				<div class="alert alert-success" style="width: 500px;" role="alert"><strong>Usted accede desde : </strong><?php
				$query = @unserialize (file_get_contents('http://ip-api.com/php/'));
				if ($query && $query['status'] == 'success') {
					echo $query['country'];
				}
				if($query['country']=="Spain"){
					echo '<img src="estilos/es.png" width=470px>';

				}else{
					echo '<h1>Is not spain :(</h1>';
				}
				?></div>
			</div>


		</div>
		<div class="row">
			<div class="col-sm-12 col-md-3" style="background-color: #FF4136;border-radius: 5px;color:white;margin-bottom: 10px;">
				<?php
				if(isset($_POST['radio1'])){
					if($_POST['radio1']=="si"){
						
						echo '
						<div class="card">
						<div class="card-body"> <h5>Elegiste Si</h5> </div>
						<img class="card-img-bottom" src="estilos/free.png" alt="Carta con imagen">
						</div>
						';
					}else if($_POST['radio1']=="no"){
						echo '
						<div class="card">
						<div class="card-body"> <h5>Elegiste no</h5> </div>
						<img class="card-img-bottom" src="estilos/sad.png" alt="Carta con imagen">
						</div>
						';
					}else if($_POST['radio1']=="ayudare"){
						echo '
						<div class="card">
						<div class="card-body"> <h5>Elegiste ayudare pero no economicamente</h5> </div>
						<img class="card-img-bottom" src="estilos/miner2.png" alt="Carta con imagen">
						</div>
						';

					}
				}

				?>


			</div>
			<div class="col-sm-12 col-md-6" style="background-color: #FF4136;width: 500px;margin-left: 10px;margin-right:10px;color:white;border-radius: 5px;">
				<?php
				
				if(!isset($_POST['chk1'])){
					echo "No elegiste ningun checkbox";
					echo '<img class="card-img-bottom" src="estilos/sad.png" alt="Carta con imagen" style="float:right;">';
				}else{
					$checks=$_POST['chk1'];
					$lenght=count($checks);
					for ($i=0; $i <$lenght ; $i++) { 
						if($checks[$i]=="total"){
							echo "Elegiste : Pretendo financiar cualquier campaña a favor del ecologismo";
							echo '<br>';
							echo '<img src="estilos/coin.png"';
							echo '<br>'.'<br>';
						}
						if($checks[$i]=="semi"){
							echo "Elegiste : Pretendo ser voluntario y participar activamente en campañas";
							echo '<br>';
							echo '<img src="estilos/heart.png"';
							echo '<br>'.'<br>';
						}
						if($checks[$i]=="noob"){
							echo "Elegiste : Pretendo compartir informacion a seres queridos y familiares";
							echo '<br>';
							echo '<img src="estilos/woodSword.png"';
							echo '<br>'.'<br>';
						}
						if($checks[$i]=="moral"){
							echo "Elegiste : Apoyo moral";
							echo '<br>';
							echo '<img src="estilos/star.png">';
							echo '<br>'.'<br>';
						}
					}
				}
				?>
			</div>
			<div class="col-sm-12 col-md-3" style="background-color: white;">
				<?php
				if(isset($_POST['chk1'])){
					$checks=$_POST['chk1'];
					if(count($checks)==4){
						echo '<iframe src="https://giphy.com/embed/CjUJA1fCOvPFaub1kq" width="280" height="280" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p><a href="proyecto.php">Eres majestuoso</a></p>';

					}else{
						echo '<h2>Hay una sorpresa oculta!</h2>';	
					}
				}else{
					echo '<h2>Hay una sorpresa oculta!</h2>';
				}

				?>
			</div>

		</div>

		<div class="row">
			<div class="col-md-12">
				<?php
				if($_POST['formEstados']=="BS"){
					echo '<div class="alert alert-success" role="alert">seleccionaste buscado por lo que el fondo se cambia a uno Western"</div>';
					echo '<link rel="stylesheet" type="text/css" href="estilosLittle/estilo3.css">';

				}
				if($_POST['formEstados']=="DA"){

					echo '<div class="alert alert-success" role="alert">seleccionaste dios del amor por lo que el fondo se cambia a uno amoroso"</div>';
					echo '<link rel="stylesheet" type="text/css" href="estilosLittle/estilo2.css">';

				}
				if($_POST['formEstados']=="SM"){
					echo '<div class="alert alert-success" role="alert">seleccionaste semidios por lo que el fondo se cambia a uno divino"</div>';

					echo '<link rel="stylesheet" type="text/css" href="estilosLittle/estilo1.css">';
				}
				if($_POST['formEstados']=="SH"){
					echo '<div class="alert alert-success" role="alert">seleccionaste semihumano por lo que el fondo se cambia a uno del tema"</div>';
					echo '<link rel="stylesheet" type="text/css" href="estilosLittle/estilo4.css">';


				}
				if($_POST['formEstados']=="ML"){
					echo '<div class="alert alert-success" role="alert">seleccionaste Mala gente por lo que el fondo se cambia a uno malicioso"</div>';
					echo '<link rel="stylesheet" type="text/css" href="estilosLittle/estilo5.css">';

				}

				?>
			</div>

		</div>	



	</div>
</body>
</html>