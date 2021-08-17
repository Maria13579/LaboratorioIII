<?php
    class Administrador
    {
        public $admin;
        public $smarty;
        public $u;
        public function __construct()
        {
            $this->admin = new Admin();
            $this->smarty = new Smarty();
            Session_start();
        }
        public function Usuario()
        {
            $nom=$_POST['nombre'];
            $ape=$_POST['apellido'];
            $use=$_POST['usuario'];
            $pas=$_POST['password'];
            $ro=$_POST['rol'];   
            $this->admin->CrearUsuario($ro,$nom,$ape,$use,$pas);
            $this->smarty->assign('nombre',$_SESSION['user']);
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
            $this->smarty->assign('nombre',$_SESSION['user']);
            $this->smarty->assign('title','Administrador');
            $this->smarty->display('Administrador.tpl');
        } 

    }
?>