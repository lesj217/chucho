<?php
if(isset($_POST["usuario"],$_POST["passwd"])){
    $conection  = new Conection();
    $connect    = $conection->get_conection();

    try{
        $user = htmlentities(addslashes($_POST['usuario']));
        $pass = htmlentities(addslashes($_POST['passwd']));

        $query  = $connect->prepare("SELECT * FROM usuarios WHERE usuario = :user;");
        $query->execute(array(':user' => $user));

        $rows   = $query->fetch(PDO::FETCH_ASSOC);

        if($rows['password'] == $pass){
            setcookie("user", $rows['usuario'], time()+86400, "/", "", 0);
            setcookie("privilegio", $rows['privilegio'], time()+86400, "/", "", 0);
            echo 1;
        }else{
            echo 2;
        }
    }catch(PDOException $e) {
        die("ERROR al conectar con la tabla usuario ".$e->getMessage());
    }finally{
        $connect = null;
    }
}


?>