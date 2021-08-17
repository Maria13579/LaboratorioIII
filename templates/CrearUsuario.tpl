{include file="templates/Cabeceras/Header.tpl"}

<div class="card-panel teal lighten-2 "><h1 class="center-align">Crear Usuario</h1> </div>
{include file="Navs/BarraAdministrador.tpl"}  
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
                    {foreach from=$NombreRol item=$n}
                        <option value="{$n['idRol']}">{$n['Nombre']}</option>
                    {/foreach}
                    </select>
                </div>    
                <div class="input-field col s8">
                    <input class="waves-effect waves-light btn " type= "submit" value="Guardar Usuario">
                </div>
            </form>
        </div>
{include file="templates/Cabeceras/Footer.tpl"}