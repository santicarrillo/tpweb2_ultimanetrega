{include file="header.tpl"}

<div class="row justify-content-md-center container text-center mt-5 mb-5" >
    <div class="card" id="cardEscuderias">
        {if isset($escuderias->img)}
        <div><img src="{$escuderias->img }"></div>
            <hr>
        {/if}
        <div class="card-body">
            <h5 class="card-title display-6">{$escuderias->equipos}</h5> 
            <h6 class="card-subtitle mb-2 text-muted">{$escuderias->pilotos}</h6>
            <p class="card-text">{$escuderias->pos_equipos}</p>
            <p class="card-text">{$escuderias->description}</p>
            <a class="btn btn-primary mt-2" href="{BASE_URL}">Volver</a>
        </div>
    </div>
</div>

{include file="footer.tpl"}