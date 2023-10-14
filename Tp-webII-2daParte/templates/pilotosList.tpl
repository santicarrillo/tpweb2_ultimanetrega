{include file="header.tpl"}
{include file="img_formalta.tpl"}

{if isset($smarty.session.USER_ID)}
    {include file="form_alta.tpl"}
{/if}

<table class="table table-striped">
    <thead>
        <th></th>    
        <th>Nombre de los Pilotos</th>
        <th>Posicion en el Campeonato de Pilotos</th>
        <th>Puntos en el Campeonato de Pilotos</th>
        
        
    </thead> 
    
    {foreach from=$formula1 item=$pilotos}

        <tr>
        <td> 
            <span> 
                <td>{$pilotos->nombre|truncate:25}</td> 
                <td>{$pilotos->campeonato|truncate:25}</td> 
                <td>{$pilotos->puntos|truncate:25}</td>
            {if isset($smarty.session.USER_ID)}
                <td><a href='editPilotosform/{$pilotos->id}' type='button' class='btn btn-info'>Editar</a></td>
                <td><a href='eliminarPilotos/{$pilotos->id}' type='button' class='btn btn-danger'>Borrar</a></td>
            {/if}           
            </span> 
        </td>
        </tr>
    {/foreach}
        
</table>

 
<p class="mt-3"><small>Mostrando {$count} Pilotos</small></p>

{include file="footer.tpl"}
   





