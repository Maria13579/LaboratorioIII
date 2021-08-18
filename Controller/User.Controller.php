<?php
    Class User
    {
        public $smarty;
        public $persona;
        public $USUARIO;
        public function __construct()
        {
            Session_start();
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
                    $_SESSION['nombre'] = $vec[0]['Nombre'];
                    $_SESSION['apellido'] = $vec[0]['Apellido'];
                    $_SESSION['rol'] = $vec[0]['Rol_idRol'];
                    $_SESSION['idUsua']=$vec[0]['idUsuario'];
                    if($_SESSION['rol']==1)
                    {
                        $_SESSION['rol']= "Administrador";
                    }
                    else if ($_SESSION['rol']==2)
                    {
                        $_SESSION['rol'] = "Trabajador";
                    }
                  $this->smarty->assign('nombre', $_SESSION['nombre']); 
                  $this->smarty->assign('apellido', $_SESSION['apellido']);
                  $this->smarty->assign('ro', $_SESSION['rol']);
                  
                  $this->smarty->assign('title','Administrador');
                    $this->smarty->display('Administrador.tpl');
                }
                else if($vec[0]['Rol_idRol']==2)
                {
                    $_SESSION['nombre'] = $vec[0]['Nombre'];
                    $_SESSION['apellido'] = $vec[0]['Apellido'];
                    $_SESSION['rol'] = $vec[0]['Rol_idRol'];
                    $_SESSION['idUsua']=$vec[0]['idUsuario'];
                    if($_SESSION['rol']==1)
                    {
                        $_SESSION['rol']= "Administrador";
                    }
                    else if ($_SESSION['rol']==2)
                    {
                        $_SESSION['rol']= "Trabajador";
                    }
                    $this->smarty->assign('nombre', $_SESSION['nombre']); 
                    $this->smarty->assign('apellido', $_SESSION['apellido']);
                    $this->smarty->assign('ro', $_SESSION['rol']); 
                 
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