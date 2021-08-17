{include file="templates/Cabeceras/Header.tpl"}
{include file="Navs/BarraTrabajador.tpl"}  
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
            <br/> <br/><br/> <br/>
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
        {if isset($producto)}
            {foreach from=$producto item=$in}
                <tr>
                    <td>
                        {$in['Nombre']}
                    </td>
                    <td>
                     {$in['Codigo']}
                    </td>
                    <td>
                     {$in['Descripcion']}
                    </td>
                    <td>
                     {$in['FechadeIngreso']}
                    </td>
                    <td>
                      {$in['Cantidad']}
                    </td>
                    <td>
                      {$in['PrecioUnitario']}
                    </td>
                </tr>
            {/foreach}
        {/if}
        </tbody>
    </table>
    </div>
    </div>
    <br/> <br/> <br/>
    {include file="Navs/Piepagina.tpl"}  
{include file="templates/Cabeceras/Footer.tpl"}