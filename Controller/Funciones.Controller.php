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
        
    }
?>