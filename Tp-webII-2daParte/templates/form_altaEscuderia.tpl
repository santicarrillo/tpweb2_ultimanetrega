<form action="agregar" method="POST" class="my-4">
    <div class="row">
        <div class="col-9">
            <div class="form-group">
                <label>Equipos</label>
                <input required name="equipos" type="text" class="form-control">
            </div>
        </div>
    </div>

    <div class="col-3">
        <div class="form-group">
        <label>Puntos por Equipos</label>
        <input required name="puntos_equipo" type="text" class="form-control">
        </div>
    </div>
    <div class="form-group">
    <label>Pilotos</label>
    <input required name="pilotos" type="text" class="form-control">
</div>
    <div class="form-group">
        <label>Descripcion</label>
        <input required name="description" type="text" class="form-control">
    </div>
    
    <div class="form-group">
        <label>Posicion del Equipo en el Campeonato</label>
        <input required name="pos_equipos" type="text" class="form-control">
        
    </div>

    <button type="submit" class="btn btn-primary mt-2">Guardar</button>
</form>