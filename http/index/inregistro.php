<?php 
if (isset($_COOKIE['user']) AND isset($_COOKIE['privilegio'])){
	if ($_COOKIE['user'] != "" AND $_COOKIE['privilegio'] == 1) {
		echo '    <div class="container">
      <header>
             <h3>Prestamo</h3>
      </header>

          <table border="1" align="center">
         <tr>
            <td>Nombre:</td>
            <td><input id="nombre" name="nombre" type="text" placeholder="Nombre">
         </tr>
         <tr>
          <td>Apellido:</td>
          <td><input id="apellidoP" name="apellidoP" type="text" placeholder="Apellido">
        </tr>
      <tr>
         <td>Telefono:</td>
         <td><input id="Telefono" name="Telefono" type="number" placeholder="Telefono">

      </tr>
       <tr>
          <td>Edad:</td>
           <td><input id="edad" name="edad" type="number" placeholder="Edad">
      </tr>
      <tr>
      <tr>
         <td>Sexo:</td>
       <td>  <select name="sexo" id="sexo" >
         <option value="Masculino">Masculino</option>
         <option value="Femenino">Femenino</option>
         </select></td>
      </tr>
      <tr>
          <td>Libro:</td>
          <td><input id="Libro" name="Libro" type="text" placeholder="Libro">
      </tr>
      <tr>
          <td>Fecha De Salida:</td>
          <td><input id="FechaSalida"  name="FechaSalida" type="date" placeholder="dd/mm/aa">
      </tr>
      <tr>
          <td>Fecha De Entrega:</td>
          <td><input id="FechaEntrega"  name="FechaEntrega" type="date" placeholder="dd/mm/aa">
      </tr>
      <tr>
          <td>Hora:</td>
          <td><input id="Hora" name="Hora" type="time" placeholder="Hora">

            <br><br>
        <button type="submit" onclick="insertRegistro()">Enviar</button>
        </td>
      </tr>
     </table>
     <div id="alert"></div>
  </div>';

		 }else{
		 	echo "COOKIE INVALIDA";
		 }
}
?>