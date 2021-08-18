<?php
    class Administrador
    {
        public $admin;
        public $smarty;
        public $u;
        public function __construct()
        {
            Session_start();
            $this->admin = new Admin();
            $this->smarty = new Smarty();
         
        }
        public function Usuario()
        {
            
            $nom=$_POST['nombre'];
            $ape=$_POST['apellido'];
            $use=$_POST['usuario'];
            $pas=$_POST['password'];
            $ro=$_POST['rol'];   
            $this->admin->CrearUsuario($ro,$nom,$ape,$use,$pas);
            $this->smarty->assign('nombre', $_SESSION['nombre']); 
            $this->smarty->assign('apellido', $_SESSION['apellido']);
            $this->smarty->assign('ro', $_SESSION['rol']); 
            $this->smarty->assign('title','Administrador');
            $this->smarty->display('Administrador.tpl');
        }
        public function Productos()
        {
            $nombre =$_POST['nombre'];
            $descr = $_POST['descripcion'];
            $cantidad = $_POST['cantidad'];
            $precio = $_POST['precio'];
            $fecha = $_POST['fecha'];
            $codigo = $_POST['codigo'];
            $idus = 1;
            $this->admin->IngresoProducto($idus,$nombre,$codigo,$descr,$fecha,$cantidad,$precio);
            $this->smarty->assign('nombre', $_SESSION['nombre']); 
            $this->smarty->assign('apellido', $_SESSION['apellido']);
            $this->smarty->assign('ro', $_SESSION['rol']); 
            $this->smarty->assign('title','Administrador');
            $this->smarty->display('Administrador.tpl');
        } 

    }
?>