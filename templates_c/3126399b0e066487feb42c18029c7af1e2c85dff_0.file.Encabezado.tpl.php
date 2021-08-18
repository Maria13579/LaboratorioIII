<?php
/* Smarty version 3.1.39, created on 2021-08-18 07:06:38
  from 'C:\adobeTemp\htdocs\LaboratorioIII\templates\Navs\Encabezado.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_611c955ea29f26_08419766',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3126399b0e066487feb42c18029c7af1e2c85dff' => 
    array (
      0 => 'C:\\adobeTemp\\htdocs\\LaboratorioIII\\templates\\Navs\\Encabezado.tpl',
      1 => 1629263166,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_611c955ea29f26_08419766 (Smarty_Internal_Template $_smarty_tpl) {
?>
      <nav>
      <div class="nav-wrapper cyan darken-2">
        <a class="brand-logo center">
        <?php if ((isset($_smarty_tpl->tpl_vars['nombre']->value))) {?>
          <?php echo $_smarty_tpl->tpl_vars['nombre']->value;?>
  <?php echo $_smarty_tpl->tpl_vars['apellido']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['ro']->value;?>

          <?php } else { ?>
            Inicio Sesion            
        <?php }?>
          </a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
          <li><a href="?class=Home&method=Inicio">Salir</a></li>
        </ul>
      </div>
      </nav>


    <?php }
}
