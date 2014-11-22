<?php
	error_reporting(E_ALL ^ E_NOTICE);
	//Las variables modifican el texto al ser llamadas con echo en el codigo
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>GET</title>
</head>
<body>
<?php
	echo "Nombre:". $_GET['nombre']. "<br/>". "Tipo:". $_GET['tipo'];
?>
</body>
</html>