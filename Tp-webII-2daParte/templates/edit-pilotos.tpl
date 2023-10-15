{include file="header.tpl"}

        <h1 class="display-5 mt-5 text-center">Editar piloto</h1>
        <div class="row justify-content-md-center">
            <form action="editpiloto/{$piloto->id}" method="POST" class="my-4">
                <div class="row justify-content-md-center">
                    <div class="col-9">
                        <div class="form-group">
                            <label>Nombre</label>
                            <input name="nombre" type="text" class="form-control" value="{$piloto->nombre}" required>
                        </div>
                    </div>
                    <div class="col-9">
                        <div class="form-group">
                            <label>Campeonato</label>
                            <input name="campeonato" type="text" class="form-control" value="{$piloto->campeonato}" required>
                        </div>
                    </div>
                    <div class="col-9">
                        <div class="form-group">
                            <label>Puntos</label>
                            <input name="puntos" type="text" class="form-control" value="{$piloto->puntos}" required>
                        </div>
                    </div>
                </div>
                <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                    <button type="submit" class="btn btn-primary mt-2">Editar piloto</button>
                </div>
            </form>  
        </div>


{include file="footer.tpl"}
