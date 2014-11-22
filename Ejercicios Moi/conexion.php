<!--CONECTAR A LA BASE DE DATOS-->	
<?php
error_reporting(E_ALL ^ E_NOTICE);
$enlace = mysql_connect("localhost", "root", "");

 if(!$enlace){
 	die("No se puede conectar" . mysql_error());
 }

 echo "Conectado Satisfactoriamente a la base de datos";

mysql_select_db("prueba-g",$enlace) OR DIE ("Error: No es posible establecer la conexión");
?>
<!--///////////////////////////-->
<!--///////////////////////////-->
<!--///////////////////////////-->