<?php

$conexion= new mysqli("localhost","root","","empresa");
//var_dump($conexion);

if($conexion->errno){
	die("No hay conexion"-$conexion->error);
	
}
	
	$codigo = $_POST['contrasinal'];
	$usuario= $_POST['nombre'];
	
	$consulta = "SELECT contrasinal,nombre FROM usuario WHERE contrasinal\"contrasinal\"";
	$resultado = $conexion->query($consulta);
	var_dump($resultado);

	while($persona = $resultado->fetch_assoc()){
		if($nombre == $persona['nombre']){
			echo "Enhorabuena!!";
			session_start();
			S_SESSION['usuario'] = $codigo;
			header("Location: index.php");
		}
	
	}
?>