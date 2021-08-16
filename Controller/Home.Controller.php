<?php
    Class Home
    {
        public function Inicio()
        {
            $smarty = new Smarty();
            
           // $con = new Conexion();     
            $smarty->assign('nombre','Login');
            $smarty->display('Home.tpl');
        }
    }
?>