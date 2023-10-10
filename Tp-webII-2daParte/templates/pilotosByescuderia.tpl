{include file="header.tpl"}

<table class="table table-striped">
    <thead>
        <th></th>    
        <th>Equipos</th>
        <th>Pilotos</th>
        <th>Puntos Por Equipo</th>
        <th>Posicion del Equipo en el Campeonato</th>
        <th>Editar</th>
        <th>Borrar</th>
        
    </thead>     

        {foreach from=$formula1 item=$escuderias}
    <tr>
        <td> 
            <span> 
                <td>{$escuderias->equipos|truncate:35}</td> 
                <td>{$escuderias->pilotos|truncate:35}</td> 
                <td>{$escuderias->puntos_equipo|truncate:35}</td>
                <td>{$escuderias->pos_equipos|truncate:35}</td>
            </span> 
        </td>
                
    </tr>
{/foreach}

</table>

<p class="mt-3"><small>Mostrando {$count} escuderias</small></p>
{include file="footer.tpl"}