<?php 
class Consults{
    public function session(){
        $session    = null;
        $connection = new Conection();
        $connect    = $connection->get_conection();
        $query      = $connect->prepare("SELECT * FROM usuarios WHERE id = :idu");
        $query->execute(array(":idu"=>$_SESSION['id_user']));
        while($user = $query->fetch(PDO::FETCH_ASSOC)){
            $session[] = $user;
        }
        return $session;
    }

        public function regRegistro($nombre,$apellidoP,$Telefono,$edad,$sexo,$Libro,$FechaSalida,$FechaEntrega,$Hora){
        $conection  = new Conection();
        $connect    = $conection->get_conection();
        $query      = "INSERT INTO registro(nombre,apellido,telefono,edad,sexo,Libro,fecha_salida,fecha_entrega,hora) VALUES(:nombre,:apellidoP,:Telefono,:edad,:sexo,:Libro,:FechaSalida,:FechaEntrega,:Hora);";
        $stm        = $connect->prepare($query);
        $stm->bindParam(':nombre',$nombre ,PDO::PARAM_STR);
        $stm->bindParam(':apellidoP' ,$apellidoP ,PDO::PARAM_STR);
        $stm->bindParam(':Telefono',$Telefono ,PDO::PARAM_STR);
        $stm->bindParam(':edad',$edad,PDO::PARAM_STR);
        $stm->bindParam(':sexo'  ,$sexo,PDO::PARAM_STR);
        $stm->bindParam(':Libro',$Libro,PDO::PARAM_STR);
        $stm->bindParam(':FechaSalida',$FechaSalida       ,PDO::PARAM_STR);
        $stm->bindParam(':FechaEntrega'  ,$FechaEntrega         ,PDO::PARAM_STR);
        $stm->bindParam(':Hora',$Hora       ,PDO::PARAM_STR);
        $stm->execute();
    }

    function verRegistros(){
        $da         = null;
        $connection = new Conection();
        $connect    = $connection->get_conection();
        $query      = $connect->query("SELECT * FROM registro");
                echo '<table border="1">
              <tr>
                <th>ID</th>
                <th>NOMBRE</th>
                <th>APELLIDO</th>
                <th>TELEFONO</th>
                <th>EDAD</th>
                <th>SEXO</th>
                <th>LIBRO</th>
                <th>FECHA S</th>
                <th>FECHA E</th>
                <th>HORA</th>          
            </tr>
           
  ';
        foreach ($query as $value) {
            echo '
                <tr>
                <td>'.$value['id_registro'].'</td>
                <td>'.$value['nombre'].'</td>
                <td>'.$value['apellido'].'</td>
                <td>'.$value['telefono'].'</td>
                <td>'.$value['edad'].'</td>
                <td>'.$value['sexo'].'</td>
                <td>'.$value['libro'].'</td>
                <td>'.$value['fecha_salida'].'</td>
                <td>'.$value['fecha_entrega'].'</td>
                <td>'.$value['hora'].'</td>          
                </tr>
                <br>';
           
        }
        
echo '</table>';
     

    }

    function buscar($da){
        
        $connection = new Conection();
        $connect    = $connection->get_conection();
        $query      = $connect->query("SELECT * FROM registro WHERE nombre LIKE '%$da%';");
        echo '<table border="1">
              <tr>
                <th>ID</th>
                <th>NOMBRE</th>
                <th>APELLIDO</th>
                <th>TELEFONO</th>
                <th>EDAD</th>
                <th>SEXO</th>
                <th>LIBRO</th>
                <th>FECHA S</th>
                <th>FECHA E</th>
                <th>HORA</th>          
            </tr>
           
  ';
        foreach ($query as $value) {
            echo '
                <tr>
                <td>'.$value['id_registro'].'</td>
                <td>'.$value['nombre'].'</td>
                <td>'.$value['apellido'].'</td>
                <td>'.$value['telefono'].'</td>
                <td>'.$value['edad'].'</td>
                <td>'.$value['sexo'].'</td>
                <td>'.$value['libro'].'</td>
                <td>'.$value['fecha_salida'].'</td>
                <td>'.$value['fecha_entrega'].'</td>
                <td>'.$value['hora'].'</td>          
                </tr>
                <br>';
           
        }
        
echo '</table>';
    }

}
 
