<?php
/* Smarty version 3.1.39, created on 2021-08-17 07:54:52
  from 'C:\adobeTemp\htdocs\LaboratorioIII\templates\Trabajador\BuscarProductos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_611b4f2c2237a5_37453496',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd47bca3c81325a864b231dc838680bead0e85d52' => 
    array (
      0 => 'C:\\adobeTemp\\htdocs\\LaboratorioIII\\templates\\Trabajador\\BuscarProductos.tpl',
      1 => 1629179686,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/Cabeceras/Header.tpl' => 1,
    'file:Navs/BarraTrabajador.tpl' => 1,
    'file:templates/Cabeceras/Footer.tpl' => 1,
  ),
),false)) {
function content_611b4f2c2237a5_37453496 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/Cabeceras/Header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:Navs/BarraTrabajador.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>  
<h1>Trabajador</h1>
<h3> Buscar Producto</h3>
    <div class="col s8">
        <form method="post" action="?class=Trabajador&method=Buscar">
            <div class="input-field col s8">
                <input  type="text" name="codigo" placeholder="Codigo del Producto a Buscar">
                <br/>
            </div>
            <div class="input-field col s8">
            <input class="waves-effect waves-light btn " type= "submit" value="Buscar Producto">
        </div>
        </form>
    </div>
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
        </tbody>
    </table>


<?php $_smarty_tpl->_subTemplateRender("file:templates/Cabeceras/Footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
