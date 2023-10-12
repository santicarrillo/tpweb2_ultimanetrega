{include file="header.tpl"}

<h1 class="display-5 mt-5 text-center">Editar pilotos</h1>
<div class="row justify-content-md-center">
    <form action="editbrand/{$pilotos->id}" method="POST" class="my-4">
        <div class="row justify-content-md-center">
            <div class="col-9">
                <div class="form-group">
                    <label>Nombre del Piloto</label>
                    <input name="name" type="text" class="form-control" value="{$pilotos->nombre}" required>
                </div>
            </div>
            <div class="col-9">
                <div class="form-group">
                    <label>Posicion del Campeonato de Pilotos</label>
                    <input name="industry" type="text" class="form-control" value="{$pilotos->campeonato}" required>
                </div>
            </div>
            <div class="col-9">
                <div class="form-group">
                    <label>Puntos en el Campeonato de Pilotos</label>
                    <input name="category" type="text" class="form-control" value="{$pilotos->puntos}" required>
                </div>
            </div>
        </div>
        <div class="d-grid gap-2 d-md-flex justify-content-md-center">
            <button type="submit" class="btn btn-primary mt-2">Editar pilotos</button>
        </div>
    </form>  
</div>     
 
{include file="footer.tpl"}