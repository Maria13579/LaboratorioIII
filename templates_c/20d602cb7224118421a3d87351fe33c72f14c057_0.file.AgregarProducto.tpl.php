<?php
/* Smarty version 3.1.39, created on 2021-08-18 05:49:12
  from 'C:\adobeTemp\htdocs\LaboratorioIII\templates\Administrador\AgregarProducto.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_611c8338640722_20962491',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '20d602cb7224118421a3d87351fe33c72f14c057' => 
    array (
      0 => 'C:\\adobeTemp\\htdocs\\LaboratorioIII\\templates\\Administrador\\AgregarProducto.tpl',
      1 => 1629258548,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/Cabeceras/Header.tpl' => 1,
    'file:Navs/Encabezado.tpl' => 1,
    'file:Navs/BarraAdministrador.tpl' => 1,
    'file:Navs/Piepagina.tpl' => 1,
    'file:templates/Cabeceras/Footer.tpl' => 1,
  ),
),false)) {
function content_611c8338640722_20962491 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/Cabeceras/Header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:Navs/Encabezado.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>  
  <?php $_smarty_tpl->_subTemplateRender("file:Navs/BarraAdministrador.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>   
  <h3> Agregar Producto</h3>
        <div class="col s8">
            <form method="post" action="?class=Administrador&method=Productos">
                <div class="input-field col s8">
                    <input id="nombre" type="text" name="nombre" placeholder="Nombre del Producto">   
                    <br/>
                </div>
                <div class="input-field col s8">
                    <input  type="text" name="codigo" placeholder="Codigo del Producto">
                    <br/>
                 </div>
                <div class="input-field col s8">
                    <input type="text" name="descripcion" placeholder="Descripción del Producto">
                    <br/>
                </div>
                <div class="input-field col s8">
                     <input  type="date" name="fecha" placeholder="Fecha de registro del Producto">
                      <br/>
                </div>
                <div class="input-field col s8">
                    <input  type="number" name="cantidad" placeholder="Cantidad de Producto">
                    <br/>
                </div>
                <div class="input-field col s8">
                    <input  type="number" name="precio" placeholder="Precio Unitario del Producto">
                    <br/>
                </div>   
                <div class="input-field col s8">
                    <input class="waves-effect waves-light btn " type= "submit" value="Guardar Producto">
                </div>
            </form>
        </div>
    </div>   
</div>
</div>
</div>
<br/> <br/> <br/>
<?php $_smarty_tpl->_subTemplateRender("file:Navs/Piepagina.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>  
<?php $_smarty_tpl->_subTemplateRender("file:templates/Cabeceras/Footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
