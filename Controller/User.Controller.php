<?php
    Class User
    {
        public function InicioSesion()
        {
            $persona = new Usuario();
            $smarty = new Smarty();
            $user=$_POST['user'];
            $pass=$_POST['pass'];
            
            $dato=$persona->BuscarUsuario($user,$pass);
            $vec=mysqli_fetch_assoc($dato);
            echo "<br/>";

            if($dato->num_rows==1)
            {
                $smarty->display('Inventario.tpl');
            }
            else
            {              
                $smarty->display('Home.tpl');           
            }
        
        }
        public function IrHome()
        {
            $smarty = new Smarty();
            $smarty->assign('nombre','Inicio Sesion');
            $smarty->display('Home.tpl');
        }
    }
?>