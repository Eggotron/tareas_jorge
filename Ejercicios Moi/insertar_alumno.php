<?php
	error_reporting(E_ALL ^ E_NOTICE);
	//Las variables modifican el texto al ser llamadas con echo en el codigo
	$titulo ="INSERTAR ALUMNOS";

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

?>
<h1><?php echo $titulo; ?></h1>

<?php 
echo "Nombre: " . $_POST['nombre'] . "</br>";
echo "Apellidos: " . $_POST['apellido'] . "</br>";
echo "Edad: " . $_POST['edad'] . "</br>";
echo "Cuenta: " . $_POST['cuenta'] . "</br>";
echo "Teléfono: " . $_POST['telefono'] . "</br>";
echo "Dirección: " . $_POST['direccion'] . "</br>"; 

$n = $_POST['nombre'];
$a = $_POST['apellido'];
$e = $_POST['edad'];
$c = $_POST['cuenta'];
$t = $_POST['telefono'];
$d = $_POST['direccion']; 

mysql_query("INSERT INTO alumnos (nombre,apellido,edad,cuenta,telefono,direccion)
	VALUES ('$n','$a',$e,'$c','$t','$d')");
?>

</body>
</html>