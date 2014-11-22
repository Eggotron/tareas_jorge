<?php
	error_reporting(E_ALL ^ E_NOTICE);
	//Las variables modifican el texto al ser llamadas con echo en el codigo
	$titulo ="Hello World";
	$parrafo ="Este es un texto dentro de la variable";

	$nombre = "Diseño Digital Interactivo";
	$clave= "90";
	$revoe="RFC876545";
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<title><?php echo $titulo; ?></title>
<link href="css/normalize.css" rel="stylesheet" type="text/css">
<link href="css/style.css" rel="stylesheet" type="text/css">

</head>
<body>
<?php
include_once ("conexion.php");

$URL = $_GET['id'];
$alumnos = mysql_query("select * FROM alumnos");
//$alumnos = mysql_query("select * FROM alumnos WHERE id= $URL");
?>

<h1><?php echo $parrafo; ?></h1>

<ul>
	<li><?php echo $nombre; ?></li>
	<li><?php echo $clave; ?></li>
	<li><?php echo $revoe; ?></li>
</ul>


<table>
	<tbody>
		<tr>
			<th>ID</th>
			<th>Nombre</th>
			<th>Edad</th>
			<th>Cuenta</th>
			<th>Direccion</th>
			<th>Ver más</th>
			<th>Eliminar</th>
		<tr>
		<tr>
		<?php
			while ($row = mysql_fetch_array($alumnos)){
			echo "<tr>";
			echo "<td>".$row['id'] . "</td>";
			echo "<td>".$row['nombre'] . " " . $row['apellido'] . "</td>";
			echo "<td>".$row['edad'] . "</td>";
			echo "<td>".$row['cuenta'] . "</td>";
			echo "<td>".$row['direccion'] . "</td>";
			echo "<td><a href='detalle_alumnos.php?id=".$row['id'] . "'> Ver más</a></td>";
			echo "<td><a href='eliminar_alumnos.php?id=".$row['id'] . "'> X</a></td>";
			echo "</tr>";
			}		
		?>
		</tr>
	</tbody>
</table>
</br>
<form action="resultados.php" method="GET">
	<label for="id">Manda un GET</label>
	<input type="text" name="id" value="" id="id"></input>
	<p><input type="submit" value="Enviar"></p>
</form>
</br>
<form action="resultados.php" method="POST">
	<label for="id">Manda un POST</label>
	<input type="text" name="id" value="" id="id"></input>
	<p><input type="submit" value="Enviar"></p>
</form>
</br>
<h3>Introduce nuevos datos</h3>
<form action="insertar_alumno.php" method="POST">
	<input type="text" name="nombre" id="nombre" placeholder="Nombre"></input></br>
	<input type="text" name="apellido" id="apellido" placeholder="Apellidos"></input></br>
	<input type="text" name="edad" id="edad" placeholder="Edad"></input></br>
	<input type="text" name="cuenta" id="cuenta" placeholder="Cuenta"></input></br>
	<input type="text" name="telefono" id="telefono" placeholder="Teléfono"></input></br>
	<input type="text" name="direccion" id="direccion" placeholder="Dirección"></input></br>
	<p><input type="submit" value="Enviar"></p>
</form>
</body>
</html>