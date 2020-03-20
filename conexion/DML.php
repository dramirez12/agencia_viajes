<?php
$conexion=mysqli_connect('localhost','root','','db_agenciadeviajes') or dic ('no se puede conectar a la base'.mysqi_error($conexion));
class Clases{


    public function coneccion ($query)
    {
      
            $conexion=mysqli_connect('localhost','root','','db_agenciadeviajes') or dic ('no se puede conectar a la base'.mysqi_error($conexion));
       
            $ejecutar=mysqli_query($conexion,$query);
            mysqli_close($conexion);
       
      
        
    }
    public function coneccion_pdo ($query)
    {
                $servidor="mysql:dbname=agenciadeviajes;host=127.0.0.1";
                $usuario="root";
                $password="";

                try {
                    $pdo= new PDO($servidor,$usuario,$password);
                    $sentencia= $pdo->prepare($query);
                    $sentencia->execute();
                    $sentencia->closeCursor();
                    $sentencia=null;
                    $pdo=null;

                } catch(PDOException $e) {
                echo "Conexion denegada ".$e->getMessage();  
                }
    }

}

?>