<?php
    Class Direcciones
    {
        public $smarty;
        public $admin;
        public function __construct()
        {
            Session_start();
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
            $this->smarty->assign('nombre', $_SESSION['nombre']); 
            $this->smarty->assign('apellido', $_SESSION['apellido']);
            $this->smarty->assign('ro', $_SESSION['rol']); 
            $this->smarty->assign('title','Crear Usuario');
            $this->smarty->display('Administrador/CrearUsuario.tpl');
       }

        public function VisIngresoProducto()
        {
            $this->smarty->assign('nombre', $_SESSION['nombre']); 
            $this->smarty->assign('apellido', $_SESSION['apellido']);
            $this->smarty->assign('ro', $_SESSION['rol']); 
            $this->smarty->assign('title','Ingresar Producto');
            $this->smarty->display('Administrador/AgregarProducto.tpl');
        }
        public function VisSalida()
        {
            $this->smarty->assign('nombre', $_SESSION['nombre']); 
            $this->smarty->assign('apellido', $_SESSION['apellido']);
            $this->smarty->assign('ro', $_SESSION['rol']); 
            $this->smarty->assign('title','Salida');
            $this->smarty->display('Trabajador/SalidaProducto.tpl');
        }
        public function VisEntrada()
        {
            $this->smarty->assign('nombre', $_SESSION['nombre']); 
            $this->smarty->assign('apellido', $_SESSION['apellido']);
            $this->smarty->assign('ro', $_SESSION['rol']); 
            $this->smarty->assign('title','Entrada');
            $this->smarty->display('Trabajador/EntradaProducto.tpl');
        }
        public function VisVerProductos()
        {
            $this->smarty->assign('nombre', $_SESSION['nombre']); 
            $this->smarty->assign('apellido', $_SESSION['apellido']);
            $this->smarty->assign('ro', $_SESSION['rol']); 
            $this->smarty->assign('title','Ver Productos');
            $this->smarty->display('Trabajador/Productos.tpl');
        }
        public function VisBuscarProducto()
        {
            $this->smarty->assign('nombre', $_SESSION['nombre']); 
            $this->smarty->assign('apellido', $_SESSION['apellido']);
            $this->smarty->assign('ro', $_SESSION['rol']); 
            $this->smarty->assign('title','Buscar Producto');
            $this->smarty->display('Trabajador/BuscarProductos.tpl');
        }

    }

?>