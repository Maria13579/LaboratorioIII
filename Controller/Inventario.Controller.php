<?php
Class Inventario
{
    public function IngresoProducto()
    {
        $invet= new Invent();
        $smarty= new Smarty();
        $nombre =$_POST['nombre'];
        $descr = $_POST['descripcion'];
        $cantidad = $_POST['cantidad'];
        $precio = $_POST['precio'];
        $fecha = $_POST['fecha'];
        $in=$invet->GuardarInventario($nombre,$descr,$cantidad,$precio,$fecha);
        $smarty->assign('nombre','Inventario');
        $smarty->display('Inventario.tpl');
    } 
    public function VerInventarioVis()
    {
        $smarty = new Smarty();
        $invet = new Invent();
        $in=$invet->VerInventario();
        $i=array();
        while($row=mysqli_fetch_assoc($in))
        {
            array_push($i,$row);
        }
        $smarty->assign('inventario',$i);
        $smarty->assign('nombre','Ver Inventario');
        $smarty->display('verInventario.tpl');
    }
    public function VERINGRESOPRODUCTO()
    {
        $smarty = new Smarty();
        $smarty->assign('nombre','Inventario');
        $smarty->display('Inventario.tpl');
    }
  
}
?>