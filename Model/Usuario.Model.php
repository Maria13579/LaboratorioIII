<?php
    Class Usuario
    {
        public function BuscarUsuario($user, $pass)
        {
            $con = new Conexion();//hace la conexion
            $consulta=$con->query("SELECT * FROM `usuario` WHERE `Nombre`='$user' AND `Password`='$pass'  ");
            $con->close();
            return $consulta;

            //query hacemos la peticion 
        }
    }
 

?>