<?php 

session_start();
if(!isset($_SESSION['auth']) || !$_SESSION['auth']){
	header("Location:login.php");
}

require_once "./conexionDB.php";

function crearTabla(){
	$mysql = conexion();
	$q = "SELECT * FROM ventas";
	if($Ventas = $mysql->query($q)){
		$tabla = "<table border=1>";
			$tabla .= "<thead>";
				$tabla .= "<tr>";
					$tabla .= "<th>Id</th>";
					$tabla .= "<th>Nombre</th>";
					$tabla .= "<th>Apellidos</th>";
					$tabla .= "<th>Email</th>";
					$tabla .= "<th>Departamento</th>";
					$tabla .= "<th>Municipio</th>";
					$tabla .= "<th>Postal</th>";
					$tabla .= "<th>Direccion</th>";
					$tabla .= "<th>Telefono</th>";
					$tabla .= "<th>Observaciones</th>";
					$tabla .= "<th>Sexo</th>";
					$tabla .= "<th>Producto</th>";
				$tabla .= "</tr>";
			$tabla .= "</thead>";
			$tabla .= "<tbody>";
			while($c = $Ventas->fetch_assoc()){
				$tabla .= "<tr>";
					$tabla .= "<td>".$c['id']."</td>";
					$tabla .= "<td>".$c['nombre']."</td>";
					$tabla .= "<td>".$c['apellidos']."</td>";
					$tabla .= "<td>".$c['email']."</td>";
					$tabla .= "<td>".$c['departamento']."</td>";
					$tabla .= "<td>".$c['municipio']."</td>";
					$tabla .= "<td>".$c['postal']."</td>";
					$tabla .= "<td>".$c['direccion']."</td>";
					$tabla .= "<td>".$c['telefono']."</td>";
					$tabla .= "<td>".$c['observaciones']."</td>";
					$tabla .= "<td>".$c['sexo']."</td>";
					$tabla .= "<td>".$c['producto']."</td>";
				$tabla .= "</tr>";
			}
			$tabla .= "</tbody>";
		$tabla .= "</table>";
	}
	$mysql -> close();
	return print($tabla);
}
crearTabla();
?>

