<?php
	error_reporting(E_ALL ^ E_NOTICE);
	//Las variables modifican el texto al ser llamadas con echo en el codigo
	$titulo ="LISTA ALUMNOS";

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
include("conexion.php");

$URL = $_GET['id'];
//$alumnos = mysql_query("select * FROM alumnos");
$alumnos = mysql_query("select * FROM alumnos WHERE id= $URL");
?>

<h1><?php echo $titulo; ?></h1>
<table>
	<tbody>
		<tr>
			<th>ID</th>
			<th>Nombre Completo</th>
			<th>Cuenta</th>
			<th>Telefono</th>
			<th>Direccion</th>
		<tr>
		<tr>
		<?php
			while ($row = mysql_fetch_array($alumnos)){
			echo "<tr>";
			echo "<td>".$row['id'] . "</td>";
			echo "<td>".$row['nombre'] . " " . $row['apellido'] . "</td>";
			echo "<td>".$row['cuenta'] . "</td>";
			echo "<td>".$row['telefono'] . "</td>";
			echo "<td>".$row['direccion'] . "</td>";
			echo "</tr>";
			}		
		?>
		</tr>
	</tbody>
</table>


</body>
</html>