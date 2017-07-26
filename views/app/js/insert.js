function insertRegistro(){
	var form,nombre,apellidoP,Telefono,edad,sexo,Libro,FechaSalida,FechaEntrega,Hora;
	nombre 			= $("#nombre").val();
	apellidoP 		= $("#apellidoP").val();
	Telefono 		= $("#Telefono").val();
	edad 			= $("#edad").val();
	sexo 	 		= $("#sexo").val();
	Libro 			= $("#Libro").val();
	FechaSalida 	= $("#FechaSalida").val();
	FechaEntrega 	= $("#FechaEntrega").val();
	Hora 	 		= $("#Hora").val();


        if(nombre != '' && apellidoP != '' && Telefono != '' && edad != '' &&  sexo != '' && Libro != '' && FechaSalida != '' && FechaEntrega != '' && Hora != '') {
          
                form = 'nombre=' + nombre + '&apellidoP=' + apellidoP + '&Telefono=' + Telefono + '&edad=' + edad + '&sexo=' + sexo + '&Libro=' + Libro + '&FechaSalida=' + FechaSalida + '&FechaEntrega=' + FechaEntrega + '&Hora=' + Hora;
                connect = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
                connect.onreadystatechange = function() {
                    if(connect.readyState == 4 && connect.status == 200) {
                        if(connect.responseText == 1) {
                            result = '<div class="alert alert-dismissible alert-success">';
                            result += '<h4>Registro completado!</h4>';
                            result += '<p><strong>Estamos redireccionandote...</strong></p>';
                            result += '</div>';
                            __('alert').innerHTML = result;
                           setTimeout(function(){
                            location.reload();
                          }, 2000);
                            
                        } else {
                            __('alert').innerHTML = result;
                        }
                    } else if(connect.readyState != 4) {
                        result = '<div class="alert alert-dismissible alert-warning">';
                        result += '<h4>Procesando...</h4>';
                        result += '<p><strong>Estamos procesando tu registro...</strong></p>';
                        result += '</div>';
                        __('alert').innerHTML = result;
                    }
                }
                connect.open('POST','ajax.php?mode=reg',true);
                connect.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
                connect.send(form);
    
        } else {
            result = '<div class="alert alert-dismissible alert-danger">';
            result += '<h4>ERROR</h4>';
            result += '<p><strong>Todos los campos deben estar llenos.</strong></p>';
            result += '</div>';
           __('alert').innerHTML = result;
        }
    
function runScriptReg(e) {
    if(e.keyCode == 13) {
        goReg();
    }
}
}