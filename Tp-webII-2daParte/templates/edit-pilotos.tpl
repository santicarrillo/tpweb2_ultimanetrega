{include file="header.tpl"}

<h1 class="display-5 mt-5 text-center">Editar piloto</h1>
<div class="row justify-content-md-center">
    <form action="editpiloto/{$pilotos->id}" method="POST" class="my-5" enctype="multipart/form-data">
        <div class="row">
            <div class="col-9">
                <div class="form-group">
                    <label>Piloto</label>
                    <input name="nombre" type="text" class="form-control" value="{$pilotos->nombre}" required>
                </div>
            </div>
            <div class="col-3">
                <div class="form-group">
                    <label>Posicion en el Campeonato de Pilotos</label>
                    <input name="campeonato" type="text" class="form-control" value="{$pilotos->campeonato}" required>
                </div>
            </div>
        </div>

        <div class="form-group">
            <label>Puntos en el Campeonato de Piltos</label>
            <input name="puntos" class="form-control" rows="3" maxlength="200" required value="{$pilotos->puntos}"></input>
        </div>
        <div class="d-grid gap-2 d-md-flex justify-content-md-center">
            <button type="submit" class="btn btn-primary mt-2">Editar producto</button>
        </div>
    </form>
</div>

{include file="footer.tpl"}