<?php
/* Smarty version 3.1.39, created on 2021-08-17 15:26:05
  from 'C:\adobeTemp\htdocs\LaboratorioIII\templates\Administrador\CrearUsuario.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_611bb8edae24e9_68911728',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4450a92b34c2b3f41b4efc33e4ffcf094479a555' => 
    array (
      0 => 'C:\\adobeTemp\\htdocs\\LaboratorioIII\\templates\\Administrador\\CrearUsuario.tpl',
      1 => 1629206730,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/Cabeceras/Header.tpl' => 1,
    'file:Navs/BarraAdministrador.tpl' => 1,
    'file:Navs/Piepagina.tpl' => 1,
    'file:templates/Cabeceras/Footer.tpl' => 1,
  ),
),false)) {
function content_611bb8edae24e9_68911728 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/Cabeceras/Header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="card-panel teal lighten-2 "><h1 class="center-align">Crear Usuario</h1> </div>
<?php $_smarty_tpl->_subTemplateRender("file:Navs/BarraAdministrador.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>  
<h1>Administrador</h1>
<div class="col s8">
            <form method="post" action="?class=Administrador&method=Usuario">
                <div class="input-field col s8">
                    <input  type="text" name="nombre" placeholder="Nombre del Empleado">   
                    <br/>
                </div>
                <div class="input-field col s8">
                    <input type="text" name="apellido" placeholder="Apellido del Empleado">
                    <br/>
                </div>
                <div class="input-field col s8">
                    <input  type="text" name="usuario" placeholder="Usuario del Empleado">
                    <br/>
                </div>
                <div class="input-field col s8">
                    <input  type="password" name="password" placeholder="Contraseña del Empleado">
                    <br/><br/>
                </div>
                <div class="input-field col s8">
                    <select class="browser-default" name="rol" placeholder="Rol del Empleado">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['NombreRol']->value, 'n');
$_smarty_tpl->tpl_vars['n']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['n']->value) {
$_smarty_tpl->tpl_vars['n']->do_else = false;
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['n']->value['idRol'];?>
"><?php echo $_smarty_tpl->tpl_vars['n']->value['Nombre'];?>
</option>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </select>
                </div>    
                <div class="input-field col s8">
                    <input class="waves-effect waves-light btn " type= "submit" value="Guardar Usuario">
                </div>
            </form>
        </div>
        </div>
        </div>
        <br/> <br/> <br/>
        <?php $_smarty_tpl->_subTemplateRender("file:Navs/Piepagina.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>  
<?php $_smarty_tpl->_subTemplateRender("file:templates/Cabeceras/Footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
