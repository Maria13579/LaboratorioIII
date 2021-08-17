<?php
    Class Direcciones
    {
        public $smarty;
        public $admin;
        public function __construct()
        {
            $this->smarty = new Smarty();
            $this->admin = new Admin();
        }
   
       public function VisCrearUsuario ()
        {
            $a=$this->admin->VerRol();
            $arr=array();
            while($row=mysqli_fetch_assoc($a))
            {
                array_push($arr,$row);        
            }
            $this->smarty->assign('NombreRol',$arr);
            $this->smarty->assign('title','Crear Usuario');
            $this->smarty->display('CrearUsuario.tpl');
       }

        public function VisIngresoProducto()
        {
            $this->smarty->assign('title','Ingresar Producto');
            $this->smarty->display('AgregarProducto.tpl');
        }
        public function VisEntradaSalida()
        {
            $this->smarty->assign('tile','Entrada o Salida');
            $this->smarty->display('');
        }
        public function VisVerProductos()
        {
            $this->smarty->assign('title','Ver Productos');
            $this->smarty->display('verInvenario.tpl');
        }
        public function VisBuscarProducto()
        {
            $this->smarty->assign('title','Buscar Producto');
            $this->smarty->display('');
        }

    }

?>