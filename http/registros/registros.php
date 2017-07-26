<?php 
$consult = new Consults();
if (isset($_COOKIE['user']) AND isset($_COOKIE['privilegio'])){
	if ($_COOKIE['user'] != "" AND $_COOKIE['privilegio'] == 1) {
include_once('core/core.php');
include_once('http/overall/head.php');
include_once('http/overall/header.php');
echo '
<div class="container">

<div class="form-group has-success">
  <label class="control-label" for="inputSuccess">Buscar registros</label>
  <input type="text" class="form-control" id="buscar">
</div>
<center>
<h2>LISTADO</h2>
  <div id="datos"> </div>
</div>
';
include_once('http/overall/footer.php');

	}else{
		echo "COOKIE INVALIDA";
		}	 
	}else{
		header('location: index.php');
	}
?>