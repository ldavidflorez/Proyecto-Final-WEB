
<?php 

// configuracion inicial
define("SERVIDOR","localhost");
define("USUARIO","root");
define("PASS","");
define("DB","dbcompumall");	

$link = new mysqli(SERVIDOR,USUARIO,PASS,DB);

if($link->connect_error) {
	$error = "Error de conexion: ".$link->connect_errno
			."Mensaje: ".$link->connect_error;
	die($error);
}

//preparar consulta
$consultaSQL = "SELECT * FROM login_admin WHERE user='".$_POST['name']."' AND pass='".$_POST['password']."' ";

//verificar que se haga la consulta
if($resultado = $link->query($consultaSQL)){
	print("OK OK OK OK OK");
	//verificar que se obtengan resultados
	if(mysqli_num_rows($resultado) != 0){
		// $usuario = "SELECT nombre FROM login_admin WHERE user='".$_POST['name']."'";
		// $nombre = $link->query($usuario);
		// $c = $nombre->fetch_assoc();
		$usuario = $_POST['name'];
    session_start();
		$_SESSION['user']=$_POST['name'];
		$_SESSION['auth']=true;
		header("Location: admin.php");
	}
	else{
		header("Location: login.php?invalido=true");
	}
}

?>

