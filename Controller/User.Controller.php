<?php
    Class User
    {
        public $smarty;
        public $persona;
        public $USUARIO;
        public function __construct()
        {
            $this->persona = new Usuario();
            $this->smarty = new Smarty();
        }
        public function BuscarUsuario()
        {        
            $user=$_POST['user'];
            $pass=$_POST['pass'];
            $dato=$this->persona->BuscarUsuario($user,$pass);
            if($dato->num_rows==1)
            {
                $vec=array();
                while($fila=mysqli_fetch_assoc($dato))
                {
                    array_push($vec,$fila);
                }    
                if($vec[0]['Rol_idRol']==1)
                {
                    $USUARIO = "Bienvenido ".$vec[0]['Nombre']." ".$vec[0]['Apellido']."    "."Administrador";
                    $this->smarty->assign('encabe',$USUARIO);
                    $this->smarty->assign('title','Administrador');
                    $this->smarty->display('Administrador.tpl');
                }
                else if($vec[0]['Rol_idRol']==2)
                {
                    $USUARIO = "Bienvenido ".$vec[0]['Nombre']." ".$vec[0]['Apellido']."    "."Trabajador";
                    $this->smarty->assign('encabe',$USUARIO);
                    $this->smarty->assign('title','Trabajador');
                    $this->smarty->display('Trabajador.tpl');
                }  
            }
            else
            {      
                $this->smarty->assign('msn','Usuario o Contaseña incorrecto'); 
                $this->smarty->assign('title','Home');       
                $this->smarty->display('Home.tpl');           
            }
        
        }
    }
?>