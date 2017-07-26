
    function ingresar(){
        var connect,result,form,user,pass;
        user = document.getElementById('usuario').value;
        pass = document.getElementById('passwd').value;
        if(user.length > 0 && pass.length > 0){
            form    = "usuario=" + user + "&passwd=" + pass;
            connect = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
            connect.onreadystatechange = function(){
                if(connect.readyState == 4 && connect.status == 200){
                    if(connect.responseText == 1){
                        result = "<div class='alert alert-success' role='alert'><b>Accediendo...</b></div>";
                        document.getElementById('resultado').innerHTML = result;
                        location.reload();

                        }else if(connect.responseText == 2){
                        result = "<div class='alert alert-danger' role='alert'><b>¡ERROR!</b> Credencilaes incorrectas.</div>";
                        document.getElementById('resultado').innerHTML = result;
                    }else{
                        document.getElementById('resultado').innerHTML = connect.responseText;
                    }
                }else if(connect.readyState != 4){
                    result = "<div class='alert alert-info' role='alert'><b>Procesando...</b></div>";
                    document.getElementById('resultado').innerHTML = result;
                }
            }
            connect.open('POST','ajax.php?mode=login',true);
            connect.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            connect.send(form);
        }else{
            result = "<div class='alert alert-danger' role='alert'><b>¡ERROR!</b> Campos vacios.</div>";
            document.getElementById('resultado').innerHTML = result;
        }
    }

    function Eingresar(e){
        if(e.keyCode == 13){
            ingresar();
        }
    }
