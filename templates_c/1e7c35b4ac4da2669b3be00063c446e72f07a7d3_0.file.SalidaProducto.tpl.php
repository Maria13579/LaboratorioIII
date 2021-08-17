<?php
/* Smarty version 3.1.39, created on 2021-08-17 15:59:37
  from 'C:\adobeTemp\htdocs\LaboratorioIII\templates\Trabajador\SalidaProducto.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_611bc0c9aba544_15174093',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1e7c35b4ac4da2669b3be00063c446e72f07a7d3' => 
    array (
      0 => 'C:\\adobeTemp\\htdocs\\LaboratorioIII\\templates\\Trabajador\\SalidaProducto.tpl',
      1 => 1629208255,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/Cabeceras/Header.tpl' => 1,
    'file:Navs/BarraTrabajador.tpl' => 1,
    'file:Navs/Piepagina.tpl' => 1,
    'file:templates/Cabeceras/Footer.tpl' => 1,
  ),
),false)) {
function content_611bc0c9aba544_15174093 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/Cabeceras/Header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:Navs/BarraTrabajador.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>  
<h1>Trabajador</h1>
<h3> Salida de Productos</h3>
    <div class="col s8">
        <form method="post" action="?class=Trabajador&method=salida">
            
            <div class="input-field col s8">
                <input  type="text" name="codigo" placeholder="Codigo del Producto">
                <br/>
            </div>
            
            <div class="input-field col s8">
                <input  type="date" name="fecha" placeholder="Fecha de Salida del Producto">
                <br/>
            </div>
            <div class="input-field col s8">
                <input  type="number" name="cantidad" placeholder="Cantidad de Producto">
                <br/>
            </div>     
            <div class="input-field col s8">
                <input class="waves-effect waves-light btn " type= "submit" value="Guardar Salida">
            </div>
        </form>
    </div>
    </div>
 <br/> <br/> <br/>
    <?php $_smarty_tpl->_subTemplateRender("file:Navs/Piepagina.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>  
<?php $_smarty_tpl->_subTemplateRender("file:templates/Cabeceras/Footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
