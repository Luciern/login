<?php
include ("conexion.php"); 
$nombre = $_POST["nombre"]; 
$password = $_POST["contra"]; 

$consulta = "SELECT * FROM usuario WHERE nombre = \''.$nombre.'\' AND contrasinal = \''.$password.'\'";

if(!$consulta){ 
    echo "usuario no existe"; 
} 
else{ 
    print "Bienvenido"; 
} 

?>
<!DOCTYPE html>
<html>
<head>
		
			<meta charset="UTF-8">
				
</head>

<body>

		<section>
				<form action="#" method="post">
					<fieldset style="width:30%; background-color:beige; margin-left:300px; border-radius:25px;">
		
			<div >
					<label>Nombre: </label><input type="text" name="empleado" placeholder="Escriba aqui su nombre..." required="required"/>
			</div>
			<div>
					<label>Contrasinal: </label><input type="password" name="contra"/>
			</div>
			<div>
					<input type="submit" value="Enviar"/>
					<input type="reset" value="Limpiar"/>
			</div>
		
					</fieldset>
	</form>
	
	<div>
	
</body>

</html>