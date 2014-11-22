<?php
	error_reporting(E_ALL ^ E_NOTICE);
	//Las variables modifican el texto al ser llamadas con echo en el codigo
	$titulo ="ELIMINAR ALUMNOS";

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
$URL_id = $_GET['id'];
mysql_query("DELETE FROM alumnos WHERE id = $URL_id");
header('location:index.php');
?>

</body>
</html>