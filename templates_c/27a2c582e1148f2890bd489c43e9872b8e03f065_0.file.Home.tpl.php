<?php
/* Smarty version 3.1.39, created on 2021-08-18 07:06:38
  from 'C:\adobeTemp\htdocs\LaboratorioIII\templates\Home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_611c955e9a3ba0_41893088',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '27a2c582e1148f2890bd489c43e9872b8e03f065' => 
    array (
      0 => 'C:\\adobeTemp\\htdocs\\LaboratorioIII\\templates\\Home.tpl',
      1 => 1629263192,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/Cabeceras/Header.tpl' => 1,
    'file:Navs/Encabezado.tpl' => 1,
    'file:Navs/Piepagina.tpl' => 1,
    'file:templates/Cabeceras/Footer.tpl' => 1,
  ),
),false)) {
function content_611c955e9a3ba0_41893088 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/Cabeceras/Header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:Navs/Encabezado.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> 
                 <br/><br/>
                 <div class="center">
                 <?php if ((isset($_smarty_tpl->tpl_vars['msn']->value))) {?>
                    <h3><?php echo $_smarty_tpl->tpl_vars['msn']->value;?>
</h1>
                    <?php } else { ?>
                        <h3></h3>
                 <?php }?>    
                 </div>               
                 <form method="post" action="?class=User&method=BuscarUsuario" >
                      <div class = "center">
                            <div  class="row">
                                <div class="input-field col s6">
                                    <i class="material-icons prefix">account_circle</i>
                                    <input  type="text" name="user" placeholder="Ingrese su Usuario">   
                                                               
                                </div>
                                <div class="input-field col s6">
                                    <i class="material-icons prefix">lock</i>
                                        <input type="password" name="pass" placeholder="Ingrese su Contrase??a">                                   
                               </div>
                            </div>
                      </div>
                      <div class = "center">
                         <input class="waves-effect waves-light btn " type= "submit" value="Ingresar">
                      </div>                   
                 </form>
                 <div class = "center">
                     <img class="responsive-img" src="Recursos/f1.jpg">                     
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
