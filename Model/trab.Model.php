<?php
    class trab
    {
        public $con;
        public $smarty;
        public function __construct()
        {
            $this->con = new Conexion();
            $this->smarty = new Smarty();
        }
        public function VerProductos()
        {
            $consulta=$this->con->query("SELECT * FROM `producto`");
            $this->con->close();
            return $consulta;
        }

        public function BuscarProducto($cod)
        {
            $consulta=$this->con->query("SELECT * FROM `producto` WHERE `Codigo`='$cod'");
            $this->con->close();
            return $consulta;
        }

        public function Entrada($codigo,$cantidad)
        {
            $consulta=$this->con->query("UPDATE `producto` SET `Cantidad`=(`Cantidad`+'$cantidad') WHERE `Codigo`='$codigo'");
            $this->con->close();
            return $consulta;
        }

        public function Salida($codigo,$cantidad)
        {
            $consulta=$this->con->query("UPDATE `producto` SET `Cantidad`=(`Cantidad`-'$cantidad') WHERE `Codigo`='$codigo'");
            $this->con->close();
            return $consulta;
        }

        public function RegisEntrada ($idu,$idp,$idm,$fecha,$cant)
        {
            $consulta=$this->con->query("INSERT INTO `entradasalida`(`Usuario_idUsuario`, `Producto_idProducto`, `Movimiento_idMovimiento`, `Fecha`, `Cantidad`) VALUES ('$idu','$idp','$idm','$fecha','$cant')");
            $this->con->close();
            return $consulta;
        }

        public function RegisSalida ($codio,$feha,$cantidad)
        {
            
        }
    }
    
?>