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
        public function BuscarProductoes($cod)
        {
            $consulta=$this->con->query("SELECT * FROM `producto` WHERE `Codigo`='$cod'");
            return $consulta;
        }
        public function BuscarProducto($cod)
        {
            $consulta=$this->con->query("SELECT * FROM `producto` WHERE `Codigo`='$cod'");
            $this->con->close();
            return $consulta;
        }
        public function Entrada($codigop, $cantidadp)
        {
            $consulta=$this->con->query("UPDATE `producto` SET `Cantidad`=(`Cantidad`+'$cantidadp') WHERE `Codigo`='$codigop'");
            $this->con->close();
            return $consulta;
        }
        public function Salida($codigop, $cantidadp)
        {      
            $consulta=$this->con->query("UPDATE `producto` SET `Cantidad`=(`Cantidad`-'$cantidadp') WHERE `Codigo`='$codigop'");
            $this->con->close();
            return $consulta;
        }
        public function RegisMovimiento($idu, $idp, $idm, $fecha, $cant)
        {
            $consulta=$this->con->query("INSERT INTO `entradasalida`( `Usuario_idUsuario`,`Producto_idProducto`,`Movimiento_idMovimiento`,`Fecha`,`Cantidad`) VALUES ('$idu','$idp','$idm','$fecha','$cant')");
            return $consulta;
        }
    }
    
?>