{include file="header.tpl"}

<h1 class="display-5 mt-5 text-center">Editar Equipos</h1>
<div class="row justify-content-md-center">

    <form action="editEquipos/{$escuderia->id}" method="POST" class="my-5" enctype="multipart/form-data">
        <div class="row">
            <div class="col-9">
                <div class="form-group">
                    <label>Equipo</label>
                    <input name="equipos" type="text" class="form-control" value="{$escuderia->equipos}" required >
                </div>
            </div>
            <div class="col-3">
                <div class="form-group">
                    <label>Puntos por Equipos</label>
                    <input name="puntos_equipo" type="text" class="form-control" value="{$escuderia->puntos_equipo}" required>
                </div>
            </div>
            <div class="col-3">
                <div class="form-group">
                    <label>Pilotos</label>
                    <input name="pilotos" type="text" class="form-control"value="{$escuderia->pilotos}" required>
                </div>
            </div>
            <div class="col-3">
                <div class="form-group">
                    <label>Descripcion</label>
                    <input name="description" type="text" class="form-control" value="{$escuderia->description}" required>
                </div>
            </div>
        </div>

        <div class="form-group">
            <label>Posicion en el Campeonato de Constructores</label>
            <input name="pos_equipos" class="form-control" value="{$escuderia->pos_equipos}" required></input>
        </div>
        <div class="d-grid gap-2 d-md-flex justify-content-md-center">
            <button type="submit" class="btn btn-primary mt-2">Editar equipo</button>
        </div>
    </form>
</div>

{include file="footer.tpl"}