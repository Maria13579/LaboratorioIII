{include file="templates/Cabeceras/Header.tpl"}
<div class="card-panel teal lighten-2 "><h1 class="center-align">Ingreso Producto</h1> </div>


  {include file="Navs/BarraAdministrador.tpl"}   
  <h1>Administrador</h1>
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
{include file="templates/Cabeceras/Footer.tpl"}