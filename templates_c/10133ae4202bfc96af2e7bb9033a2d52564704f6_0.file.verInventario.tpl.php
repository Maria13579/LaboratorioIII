<?php
/* Smarty version 3.1.39, created on 2021-07-05 19:59:25
  from 'C:\adobeTemp\htdocs\App2Tercer_Bimestre\templates\verInventario.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60e3487de42d41_43501095',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '10133ae4202bfc96af2e7bb9033a2d52564704f6' => 
    array (
      0 => 'C:\\adobeTemp\\htdocs\\App2Tercer_Bimestre\\templates\\verInventario.tpl',
      1 => 1625507959,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/Cabeceras/Header.tpl' => 1,
    'file:Navs/BarraOpciones.tpl' => 1,
    'file:templates/Cabeceras/Footer.tpl' => 1,
  ),
),false)) {
function content_60e3487de42d41_43501095 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/Cabeceras/Header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="card-panel teal lighten-2 "><h1 class="center-align"> Ver Inventario</h1> </div>
    <?php $_smarty_tpl->_subTemplateRender("file:Navs/BarraOpciones.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <div class ="col s8">
    <table>
        <thead>
            <tr>
                <th>Nombre Producto</th>
                <th>Descripción</th>
                <th>Precio</th>
                <th>Cantidad</th>
                <th>Fecha</th>
            </tr>
        </thead>
        <tbody>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['inventario']->value, 'invent');
$_smarty_tpl->tpl_vars['invent']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['invent']->value) {
$_smarty_tpl->tpl_vars['invent']->do_else = false;
?>
                <tr>
                    <td>
                        <?php echo $_smarty_tpl->tpl_vars['invent']->value['Nombre'];?>

                    </td>
                    <td>
                     <?php echo $_smarty_tpl->tpl_vars['invent']->value['Descripcion'];?>

                    </td>
                    <td>
                      <?php echo $_smarty_tpl->tpl_vars['invent']->value['Precio'];?>

                    </td>
                    <td>
                      <?php echo $_smarty_tpl->tpl_vars['invent']->value['Cantidad'];?>

                    </td>
                    <td>
                        <?php echo $_smarty_tpl->tpl_vars['invent']->value['Fecha'];?>

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
