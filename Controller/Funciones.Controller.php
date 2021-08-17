<?php
    class Funciones
    {
        public $smarty;
        public function __construct()
        {
            $this->smarty = new Smarty;
        }
        public function Salir()
        {
            $this->smarty->assign('title','Home');
            $this->smarty->display('Home.tpl');
        }
        public function DatosUsuario()
        {
            Session_start();
            $_SESSION['user']="idUsuario";
            $idu->$_SESSION;
            $a=array();
            if ($idu->num_rows==1)
            {
                while($row=mysqli_fetch_asson($idu))
                {
                    array_push($a,$row);
                }
                var_dump($a);
            }
        }
        
    }
?>