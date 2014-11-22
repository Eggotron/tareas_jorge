<?php
	error_reporting(E_ALL ^ E_NOTICE);
	//Las variables modifican el texto al ser llamadas con echo en el codigo
	$titulo ="GET Y POST";

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<title><?php echo $titulo; ?></title>


</head>
<body>
<?php include_once("menu.php"); ?>

<h1><?php echo $titulo; ?></h1>
<h3>La variable obtenida por los metodos fue:</h3>

<?php echo "La variable pasado por GET es:" . $_GET['id'] . "</br>" ?>

<?php echo "La variable pasada por POST es:" . $_POST['id'] . "</br>" ?>

</body>
</html>