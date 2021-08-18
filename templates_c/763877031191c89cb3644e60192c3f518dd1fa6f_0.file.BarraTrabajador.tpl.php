<?php
/* Smarty version 3.1.39, created on 2021-08-18 07:02:33
  from 'C:\adobeTemp\htdocs\LaboratorioIII\templates\Navs\BarraTrabajador.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_611c94690545c0_03866405',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '763877031191c89cb3644e60192c3f518dd1fa6f' => 
    array (
      0 => 'C:\\adobeTemp\\htdocs\\LaboratorioIII\\templates\\Navs\\BarraTrabajador.tpl',
      1 => 1629262952,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_611c94690545c0_03866405 (Smarty_Internal_Template $_smarty_tpl) {
?><br/> <br/>
<div class="row">
   <div class="col s2">
      <nav class="center-align purple lighten-4">OPCIONES</nav>
         <div class="collection">
         <a href="?class=Direcciones&method=VisEntrada" class="collection-item ">Entrada de producto</a>
         <a href="?class=Direcciones&method=VisSalida" class="collection-item ">Salida de producto</a>
         <a href="?class=Direcciones&method=VisBuscarProducto" class="collection-item">Buscar Producto</a>
         <a href="?class=Trabajador&method=VerProduct" class="collection-item">Mostrar Productos</a>
         </div>
   </div>   
<?php }
}
