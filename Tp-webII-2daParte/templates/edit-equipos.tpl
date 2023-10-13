{include file="header.tpl"}

<h1 class="display-5 mt-5 text-center">Editar Equipos</h1>
<div class="row justify-content-md-center">

    <form action="editEquipo/{$escuderias->$id}" method="POST" class="my-5" enctype="multipart/form-data">
        <div class="row">
            <div class="col-9">
                <div class="form-group">
                    <label>Equipo</label>
                    <input name="equipos" type="text" class="form-control">
                </div>
            </div>
            <div class="col-3">
                <div class="form-group">
                    <label>Puntos por Equipos</label>
                    <input name="puntos_equipo" type="text" class="form-control">
                </div>
            </div>
            <div class="col-3">
                <div class="form-group">
                    <label>Pilotos</label>
                    <input name="pilotos" type="text" class="form-control">
                </div>
            </div>
            <div class="col-3">
                <div class="form-group">
                    <label>Descripcion</label>
                    <input name="description" type="text" class="form-control">
                </div>
            </div>
        </div>

        <div class="form-group">
            <label>Puntos en el Campeonato de Piltos</label>
            <input name="puntos" class="form-control" rows="3" maxlength="200"></input>
        </div>
        <div class="d-grid gap-2 d-md-flex justify-content-md-center">
            <button type="submit" class="btn btn-primary mt-2">Editar equipo</button>
        </div>
    </form>
</div>

{include file="footer.tpl"}