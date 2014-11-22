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
<h3>Pasar variable por GET</h3>

<a href="resultados.php?id=php es mi lenguaje favorito!">Variable por GET</a>
</body>
</html>