<?php
/* Smarty version 3.1.39, created on 2021-08-18 02:28:50
  from 'C:\adobeTemp\htdocs\LaboratorioIII\templates\Trabajador\Productos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_611c544204e280_86971741',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '39656c21a23dac2178213cdfd3dbe77217ab4e5a' => 
    array (
      0 => 'C:\\adobeTemp\\htdocs\\LaboratorioIII\\templates\\Trabajador\\Productos.tpl',
      1 => 1629246527,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/Cabeceras/Header.tpl' => 1,
    'file:Navs/Encabezado.tpl' => 1,
    'file:Navs/BarraTrabajador.tpl' => 1,
    'file:Navs/Piepagina.tpl' => 1,
    'file:templates/Cabeceras/Footer.tpl' => 1,
  ),
),false)) {
function content_611c544204e280_86971741 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/Cabeceras/Header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:Navs/Encabezado.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>  
    <?php $_smarty_tpl->_subTemplateRender("file:Navs/BarraTrabajador.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    
<h3> Productos</h3>
    <div class ="col s8">
    <table>
        <thead>
            <tr>
                <th>Nombre Producto</th>
                <th>Codigo</th>
                <th>Descripción</th>
                <th>Fecha</th>
                <th>Cantidad</th>
                <th>Precio</th>                               
            </tr>
        </thead>
        <tbody>
        <?php if ((isset($_smarty_tpl->tpl_vars['producto']->value))) {?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['producto']->value, 'in');
$_smarty_tpl->tpl_vars['in']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['in']->value) {
$_smarty_tpl->tpl_vars['in']->do_else = false;
?>
                <tr>
                    <td>
                        <?php echo $_smarty_tpl->tpl_vars['in']->value['Nombre'];?>

                    </td>
                    <td>
                     <?php echo $_smarty_tpl->tpl_vars['in']->value['Codigo'];?>

                    </td>
                    <td>
                     <?php echo $_smarty_tpl->tpl_vars['in']->value['Descripcion'];?>

                    </td>
                    <td>
                     <?php echo $_smarty_tpl->tpl_vars['in']->value['FechadeIngreso'];?>

                    </td>
                    <td>
                      <?php echo $_smarty_tpl->tpl_vars['in']->value['Cantidad'];?>

                    </td>
                    <td>
                      <?php echo $_smarty_tpl->tpl_vars['in']->value['PrecioUnitario'];?>

                    </td>
                </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <?php }?>
        </tbody>
    </table>
    </div>
    </div>
    <br/> <br/> <br/><br/> <br/><br/>
    <?php $_smarty_tpl->_subTemplateRender("file:Navs/Piepagina.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>  
<?php $_smarty_tpl->_subTemplateRender("file:templates/Cabeceras/Footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
