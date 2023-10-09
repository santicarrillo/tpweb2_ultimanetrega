{include file="header.tpl"}
{include file="form_alta.tpl"}


<table class="table table-striped">
    <thead>
        <th></th>    
        <th>Nombre de los Pilotos</th>
        <th>Posicion en el Campeonato de Pilotos</th>
        <th>Puntos en el Campeonato de Pilotos</th>
        <th>Editar</th>
        <th>Borrar</th>
        
    </thead> 
    
    {foreach from=$formula1 item=$pilotos}

        <tr>
        <td> 
            <span> 
                <td>{$pilotos->nombre|truncate:25}</td> 
                <td>{$pilotos->campeonato|truncate:25}</td> 
                <td>{$pilotos->puntos|truncate:25}</td>
                <td><a href='form/{$pilotos->id}' type='button' class='btn btn-info'>Editar</a></td>
                <td><a href='delete/{$pilotos->id}' type='button' class='btn btn-danger'>Borrar</a></td>           
            </span> 
        </td>
        </tr>
    {/foreach}
        
</table>

 
<p class="mt-3"><small>Mostrando {$count} Pilotos</small></p>

{include file="footer.tpl"}
   





