<?php
    class Trabajador
    {
        public $trab;
        public $smarty;
        public function __construct()
        {
            $this->tra=new trab();
            $this->smarty = new Smarty();
        }
        public function entrada()
        {
            $cantidad=$_POST['cantidad'];
            $codigo=$_POST['codigo'];
            $fecha=$_POST['fecha'];
            $con=$this->trab->BuscarProducto($codigo);
         
            if($con->num_rows==1)
            {
                $arr=array();
                while($row=mysqli_fetch_assoc($con))
                {
                    array_push($arr,$row);
                }
                $this->tra->RegisEntrada($arr[0]['idProducto'],1,$fecha,$cantidad);
            }
            else{
                echo "<h2> Producto no Encontado </h2>";
            }
            
            $this->tra->Entrada($codigo,$cantidad);
            $this->smarty->assign('title','Entrada');
            $this->smarty->display('Trabajador/EntradaProducto.tpl');
        }
        public function salida()
        {
            $cantidad=$_POST['cantidad'];
            $codigo=$_POST['codigo'];
            $this->tra->Entrada($codigo,$cantidad);
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
