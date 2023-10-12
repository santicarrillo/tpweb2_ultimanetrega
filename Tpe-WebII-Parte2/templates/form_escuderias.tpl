<!-- formulario de alta de productos -->
<form action="addPilotosByEscuderias" method="POST" class="my-4">
    <div class="row">
    <div class="col-5">
        <div class="form-group">
            <label>Pilotos</label>
            <select name="id" type="number" class="form-control">
                <option> -- Seleccione -- </option>
                <option value = "1">Max Verstappen</option>
                <option value = "2">Sergio Perez</option>
                <option value = "3">Fernando Alonso</option>
                <option value = "4">Lewis Hamilton</option>
                <option value = "5">Carlos Sainz</option>
                <option value = "6">Charles Leclerc</option>
            </select>
        </div>
        </div>
        <div class="form-group">
            <label>Titulo</label>
            <textarea name="titulo" class="form-control" rows="3"></textarea>
        </div>
        <div class="form-group">
        <label>Escuderias</label>
            <select name="categoria" class="form-control">
                <option> -- Seleccione -- </option>
                <option value = "Red Bull">Red Bull</option>
                <option value = "Mercedes">Mercedes AMG F1</option>
                <option value = "Ferrari">Ferrari</option>
                <option value = "Aston Martin">Aston Martin</option>
                <option value = "McLaren">McLaren</option>
                <option value = "Alpine">Alpine</option>
                <option value = "Williams">Williams</option>
                <option value = "Haas">Haas</option>
                <option value = "Alfa Romeo">Alfa Romeo</option>
                <option value = "AlphaTauri">AlphaTauri</option>
            </select>
        </div>
        <div class="form-group">
            <label>Puntos</label>
            <input name="puntos" type="number" class="form-control">
        </div>
        </div>
        <div class="form-group">
            <label>Puntos Por Equipo</label>
            <textarea name="puntos_equipo" class="form-control" rows="3"></textarea>
        </div>      
    
    <button type="submit" class="btn btn-primary mt-2">Guardar</button>
    

</form>