<?php 
if (!isset($_COOKIE['user']) AND !isset($_COOKIE['privilegio'])) {
  echo '
<div class="container">
    <div class="row col-md-4 col-md-offset-4">
        <br>
        <div class="panel panel-default">
            <div class="panel-heading text-center">
                <h3 class="form-signin-heading">Ingrese los datos</h3>
            </div>
            <div class="panel-body">
                <div class="form-signin form-login" role="form" onkeypress="return Eingresar(event)">
                    <div class="form-group">
                        <label for="usuario" class="control-label">Usuario:</label>
                        <input type="text" id="usuario" name="usuario" class="form-control" placeholder="usuario" required autofocus>
                    </div>
                    <div class="form-group">
                        <label for="pass" class="control-label">Contraseña:</label>
                        <input type="password" id="passwd" name="passwd" class="form-control" placeholder="contraseña" required>
                    </div>
                    <div class="form-group">
                        <button id="enviar" type="submit" class="btn btn-lg btn-primary" onclick="ingresar()">ingresar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container" id="resultado"></div>'; 
}
?>
