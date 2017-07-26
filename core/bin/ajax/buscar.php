<?php 
if (isset($_POST['buscar'])) {
	$consult = new Consults();
	$response["message"] = '';
	$da= htmlentities(addslashes($_POST['buscar']));
	if (strlen($da) > 0) {
		$resul = $consult->buscar($da);
		echo $resul;
	}else{
     $resul = $consult->verRegistros();
	}
}
?>