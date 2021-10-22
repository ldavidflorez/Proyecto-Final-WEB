<?php 

//configuracion
define("HOST","localhost");
define("USER","root");
define("PASS","");
define("DB","dbcompumall");

//conexion con base de datos
function conexion(){
	$link = new mysqli(HOST,USER,PASS,DB);
	if($link->connect_error){
		$error="Error en la conexión:".$link->connect_errno."mensaje:".$link->connect_error;
		die($error);
	}
	$consultaSQL="SET CHARACTER SET UTF8";
	$link->query($consultaSQL);
	return $link;
}
	
?>