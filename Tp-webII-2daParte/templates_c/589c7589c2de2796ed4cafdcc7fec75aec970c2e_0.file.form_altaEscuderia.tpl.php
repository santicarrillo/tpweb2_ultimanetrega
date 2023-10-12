<?php
/* Smarty version 4.2.1, created on 2023-10-12 06:00:37
  from 'C:\xampp\htdocs\web2\Tp-webII-2daParte\templates\form_altaEscuderia.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_65276f6544cf09_85302610',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '589c7589c2de2796ed4cafdcc7fec75aec970c2e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\Tp-webII-2daParte\\templates\\form_altaEscuderia.tpl',
      1 => 1697065488,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65276f6544cf09_85302610 (Smarty_Internal_Template $_smarty_tpl) {
?><main class="container mt-5">
     <div class="col"></div>
    </main>


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
            <select required name="puntos_equipo" class="form-control">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
            </select>
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

    <button type="submit" class="btn btn-primary mt-2">Agregar</button>
</form><?php }
}
