{include file="templates/Cabeceras/Header.tpl"}
{include file="Navs/BarraTrabajador.tpl"}  
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
    {include file="Navs/Piepagina.tpl"}  
{include file="templates/Cabeceras/Footer.tpl"}