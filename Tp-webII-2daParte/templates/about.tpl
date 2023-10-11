{include file="header.tpl"}

    <main class="container mt-5">
     <div class="col">
            <div class="center" style="width: 80rem">
                <img class="card-img-top" src="images/5.jpg">        
            </div>
        </div>
    </main>


<table class="table table-striped">
    <thead>
        <th></th>    
        <th>Fecha de la Carrera</th>
        <th>Nombre del Circuito y País</th>
        <th>Resultado final y Podio</th>
        
    </thead> 
    
    {foreach from=$formula1 item=$calendario}

        <tr>
        <td> 
            <span> 
                <td>{$calendario->fecha|truncate:25}</td> 
                <td>{$calendario->circuito|truncate:40}</td> 
                <td>{$calendario->podio|truncate:55}</td>          
            </span> 
        </td>
        </tr>
    {/foreach}
        
</table>


{include file="footer.tpl"}
