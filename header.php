<?php
if(isset($_POST['submit'])){
	if(isset($_POST['radio1'])){
		echo '<link rel="stylesheet" type="text/css" href="estilos/style.css">';
		
		
	}
	if(isset($_POST['radio2'])){
		echo '<link rel="stylesheet" type="text/css" href="estilos/styleAzul.css">';

	}
	if(isset($_POST['radio3'])){
		echo '<link rel="stylesheet" type="text/css" href="estilos/styleVerde.css">';


	}
}
?>


<img src="harambeCap.png" style="width:150px;float:left;margin-top:-45px;">
<h1 style="text-align: center;margin-top: 50px;margin-right: 100px;">Harambe Harambowski</h1>
<img src="harambeCap.png" style="width:150px;float:right;margin-top: -120px;">
<br><br><br><br>
<?php
$mydate=getdate(date("U"));
echo "$mydate[weekday], $mydate[month] $mydate[mday], $mydate[year]";
?>

<form method="post" action="proyecto.php">
	<div class="imput-grp" style="float: right;margin-top: -20px;">
		<label>Estilos:</label>
		<input type="radio" name="radio1">
		<label>Defecto</label>
		<input type="radio" name="radio2">
		<label>Azul</label>
		<input type="radio" name="radio3">
		<label>Verde</label>
		<input type="submit" name="submit" value="Canvia">
	</div>
</form>
