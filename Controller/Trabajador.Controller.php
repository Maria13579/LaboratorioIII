<?php
    class Trabajador
    {
        public $trab;
        public $smarty;
        public $USUARIO;
        public function __construct()
        {
            $this->tra=new trab();
            $this->smarty = new Smarty();
           
        }
        public function entrada()
        {
            $codi=$_POST['codigo'];
            $fecha=$_POST['fecha'];
            $cantidad=$_POST['cantidad'];
            $con=$this->tra->BuscarProductoes($codi);
            if($con->num_rows==1)
            {
                $arr=array();
                while($row=mysqli_fetch_assoc($con))
                {
                    array_push($arr,$row);
                }
                $this->tra->RegisMovimiento($arr[0]['idProducto'],1,$fecha,$cantidad);
                $this->tra->Entrada($codi,$cantidad);
            }
            else{
                echo "<h2> Producto no Encontado </h2>";
            }
            $this->smarty->assign('title','Entrada');
            $this->smarty->display('Trabajador/EntradaProducto.tpl');
        }
        public function salida()
        {
            $codi=$_POST['codigo'];
            $fecha=$_POST['fecha'];
            $cantidad=$_POST['cantidad'];
            $con=$this->tra->BuscarProductoes($codi);
            if($con->num_rows==1)
            {
                $arr=array();
                while($row=mysqli_fetch_assoc($con))
                {
                    array_push($arr,$row);
                }
                $this->tra->RegisMovimiento($arr[0]['idProducto'],2,$fecha,$cantidad);
                $this->tra->Salida($codi,$cantidad);
            }
            else{
                echo "<h2> Producto no Encontado </h2>";
            }
         
            $this->smarty->assign('title','Trabajador');
            $this->smarty->display('Trabajador/SalidaProducto.tpl');
        }
        public function Buscar()
        {
            $codigo=$_POST['codigo'];
            $in=$this->tra->BuscarProducto($codigo);
            $i = array();
            while($row=mysqli_fetch_assoc($in))
            {
                array_push($i,$row);
            }
            $this->smarty->assign('producto',$in);
            $this->smarty->assign('title','Trabajador');
            $this->smarty->display('Trabajador/BuscarProductos.tpl');
        }
        public function VerProduct()
        {
            $in = $this->tra->VerProductos();
            $i= array();
            while($row=mysqli_fetch_assoc($in))
            {
                array_push($i,$row);
            }
            $this->smarty->assign('producto',$in);
         
            $this->smarty->assign('title','Ver productos');
            $this->smarty->display('Trabajador/Productos.tpl');
        }
    }
        
    



?>
