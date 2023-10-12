{include file ="header.tpl"}

<table class="table table-striped">
<thead>
    <th></th>    
    <th>Equipos</th>
    <th>Pilotos</th>
    <th>Puntos por Equipos</th>
    <th>Posicion de los Equipos</th>
</thead>

{foreach from=$escuderias item=$escuderia}

<tr>
    <td> 
        <span> 
            <td>{$escuderia->equipos|truncate:25}</td> 
            <td>{$escuderia->pilotos|truncate:25}</td> 
            <td>{$escuderia->puntos_equipos|truncate:25}</td>
            <td>{$escuderia->pos_equipos|truncate:25}</td>       
        </span> 
    </td>               
</tr>
{/foreach}

</table>

<p class="mt-3"><small>Mostrando {$count} Escuderias</small></p>

{if isset($smarty.session.USER_ID)}
    {include file="form_escuderias.tpl"}
  {/if}

{include file="footer.tpl"}