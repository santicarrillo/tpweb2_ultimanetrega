{include file="header.tpl"}

<div class="container">

    <form action="edit/{$id}" method="POST">
        <h1 class="display-5 mt-5 text-center">Editar piloto</h1>
        <label>Piloto</label>
            <input name="nombre" type="text" id="nombre" class="form-control">
        <label>Posicion en el Campeonato de Pilotos</label>
            <input name="campeonato" type="text" class="form-control">
        <label>Puntos en el Campeonato de Pilotos</label>
            <input name="puntos" type="text" class="form-control">

        <h3></h3>
        <input type="submit" class="btn btn-danger" value="editar piloto">

{include file="footer.tpl"}