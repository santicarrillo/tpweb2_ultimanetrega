<?php
/* Smarty version 4.2.1, created on 2023-10-14 05:42:30
  from 'C:\xampp\htdocs\Tp-webII-2daParte\templates\form_altaEscuderia.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_652a0e26b98e44_52657977',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cabb4ba512d998956ee61a8de524a6a08b15ee7c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Tp-webII-2daParte\\templates\\form_altaEscuderia.tpl',
      1 => 1697254594,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_652a0e26b98e44_52657977 (Smarty_Internal_Template $_smarty_tpl) {
?><form action="agregar" method="POST" class="my-4">
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
</form><?php }
}
