{include file="header.tpl"}

<h1 class="display-2 container text-center">Conoce a los distintos pilotos de la Formula 1</h1>
<table class="table table-striped">
    <thead>
        <th></th>    
        <th>Nombre de los Pilotos</th>
        <th>Descripcion de los Pilotos</th>
        <th>Posicion en el Campeonato de Pilotos</th>
        <th>Puntos en el Campeonato de Pilotos</th>
        
        
    </thead> 
    
    {foreach from=$pilotos item=$piloto}

        <tr>
        <td> 
            <span> 
                <td>{$piloto->nombre|truncate:25}</td>
                <td>{$piloto->descripcion|truncate:1000}</td>
                <td>{$piloto->campeonato|truncate:25}</td> 
                <td>{$piloto->puntos|truncate:25}</td>
                <td>
                    <a href="pilotosbyescuderia/{$piloto->id_escuderia}" class="btn btn-secondary btn-sm">Ver escuderias</a>
                </td>
            </span> 
        </td>
        </tr>
    {/foreach}
        
</table>


{include file="footer.tpl"}