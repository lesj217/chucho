<?php 
if (isset($_POST['list'])) {
	$consult = new Consults();
	$response["message"] = '';
	$da= htmlentities(addslashes($_POST['list']));
	if ($da == '') {
		$resul = $consult->verRegistros();
		echo $resul;
	}else{
     $response["message"] = "¡LOS CAMPOS ESTAN VACIOS.";
	}
}
?>