{include file="templates/Cabeceras/Header.tpl"}
<div class="card-panel teal lighten-2 "><h1 class="center-align"> Ver Inventario</h1> </div>
    {include file="Navs/BarraOpciones.tpl"}
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
            {foreach from=$inventario item=$invent}
                <tr>
                    <td>
                        {$invent['Nombre']}
                    </td>
                    <td>
                     {$invent['Descripcion']}
                    </td>
                    <td>
                      {$invent['Precio']}
                    </td>
                    <td>
                      {$invent['Cantidad']}
                    </td>
                    <td>
                        {$invent['Fecha']}
                    </td>

                </tr>
            {/foreach}
        </tbody>
    </table>

{include file="templates/Cabeceras/Footer.tpl"}