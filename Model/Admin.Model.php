<?php
    class Admin
    {
        public $con;
        public function __construct()
        {
            $this->con = new Conexion();
        }
        public function VerRol()
        {
            $result=$this->con->query("SELECT * FROM `rol`");
            $this->con->close();
            return $result;
        }
        public function CrearUsuario($rol,$no,$ap,$us,$pa)
        {
            $consulta=$this->con->query("INSERT INTO `usuario`(`Rol_idRol`,`Nombre`, `Apellido`, `Usuario`, `Pass`) VALUES ('$rol','$no','$ap','$us','$pa')");
            $this->con->close();
            return $consulta;
        }
        public function IngresoProducto($idu,$n,$cod,$d,$f,$can,$p)
        {
            $consulta=$this->con->query("INSERT INTO `producto`(`Usuario_idUsuario`, `Nombre`, `Codigo`, `Descripcion`, `FechadeIngreso`, `Cantidad`, `PrecioUnitario`) VALUES ('$idu','$n','$cod','$d','$f','$can','$p')");
            $this->con->close();
            return $consulta;
        }
    }

?>