<?php
if(isset($_POST['submit'])){
	if(isset($_POST['radio1'])){
		$temaActivo="default";
		echo '<link rel="stylesheet" type="text/css" href="estilos/style.css">';
	}
	if(isset($_POST['radio2'])){
		$temaActivo="azul";
		echo '<link rel="stylesheet" type="text/css" href="estilos/styleAzul.css">';
	}
	if(isset($_POST['radio3'])){
		$temaActivo="verde";
		echo '<link rel="stylesheet" type="text/css" href="estilos/styleVerde.css">';
	}
}
?>


<img src="harambeCap.png" style="width:150px;float:left;margin-top:-0;">

<img src="harambeCap.png" style="width:150px;float:right;margin-top: 0px;"><br>
<h1 style="text-align: center;padding-bottom: -30px;margin-right: 104px;">Harambe Harambowski</h1>
<br><br>
<?php
$mydate=getdate(date("U"));
echo "$mydate[weekday], $mydate[month] $mydate[mday], $mydate[year]";
?>

<form method="post" action="proyecto.php">
	<div class="imput-grp" style="float: right;margin-top: -20px;margin-left: 15px;">
		<label>Estilos:</label>
		<input type="radio" name="radio1" >
		<label>Defecto</label>
		<input type="radio" name="radio2">
		<label>Azul</label>
		<input type="radio" name="radio3">
		<label>Verde</label>
		<input type="submit" name="submit" value="Canvia" class="btn-success">
	</div>
</form>
