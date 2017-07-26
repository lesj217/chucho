<?php 
if(isset($_POST['nombre'])){
	$consult = new Consults();
	$nombre 		= htmlentities(addslashes($_POST['nombre']));
	$apellidoP		= htmlentities(addslashes($_POST['apellidoP']));
	$Telefono 		= htmlentities(addslashes($_POST['Telefono']));
	$edad 			= htmlentities(addslashes($_POST['edad']));
	$sexo 			= htmlentities(addslashes($_POST['sexo']));
	$Libro 			= htmlentities(addslashes($_POST['Libro']));
	$FechaSalida 	= htmlentities(addslashes($_POST['FechaSalida']));
	$FechaEntrega	= htmlentities(addslashes($_POST['FechaEntrega']));
	$Hora 			= htmlentities(addslashes($_POST['Hora']));
	
	$response["message"] = "";
	if(strlen($nombre) > 0 && strlen($apellidoP) > 0 && strlen($Telefono) > 0 && strlen($edad) > 0 && strlen($sexo) > 0 && strlen($Libro) > 0 && strlen($FechaSalida) > 0 && strlen($FechaEntrega) > 0 && strlen($Hora) > 0){
		$resul = $consult->regRegistro($nombre,$apellidoP,$Telefono,$edad,$sexo,$Libro,$FechaSalida,$FechaEntrega,$Hora);
		$response["message"] = "DATOS GUARDADOS CORRECTAMENTE";
		echo 1;
	}else{
		$response["message"] = "¡ERROR!, LOS CAMPOS ESTAN VACIOS.";
	}
}
?>