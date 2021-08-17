{include file="templates/Cabeceras/Header.tpl"}
{include file="Navs/Encabezado.tpl"}  
    {include file="Navs/BarraTrabajador.tpl"}
    <h1>Trabajador</h1>
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