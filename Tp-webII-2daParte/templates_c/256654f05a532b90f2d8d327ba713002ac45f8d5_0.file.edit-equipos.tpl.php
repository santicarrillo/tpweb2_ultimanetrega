<?php
/* Smarty version 4.2.1, created on 2023-10-16 00:27:56
  from 'C:\xampp\htdocs\web2\Tp-webII-2daParte\templates\edit-equipos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_652c676cb778f6_91483555',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '256654f05a532b90f2d8d327ba713002ac45f8d5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\Tp-webII-2daParte\\templates\\edit-equipos.tpl',
      1 => 1697353698,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_652c676cb778f6_91483555 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h1 class="display-5 mt-5 text-center">Editar Equipos</h1>
<div class="row justify-content-md-center">

    <form action="editEquipos/<?php echo $_smarty_tpl->tpl_vars['escuderia']->value->id;?>
" method="POST" class="my-5" enctype="multipart/form-data">
        <div class="row">
            <div class="col-9">
                <div class="form-group">
                    <label>Equipo</label>
                    <input name="equipos" type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['escuderia']->value->equipos;?>
" required >
                </div>
            </div>
            <div class="col-3">
                <div class="form-group">
                    <label>Puntos por Equipos</label>
                    <input name="puntos_equipo" type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['escuderia']->value->puntos_equipo;?>
" required>
                </div>
            </div>
            <div class="col-3">
                <div class="form-group">
                    <label>Pilotos</label>
                    <input name="pilotos" type="text" class="form-control"value="<?php echo $_smarty_tpl->tpl_vars['escuderia']->value->pilotos;?>
" required>
                </div>
            </div>
            <div class="col-3">
                <div class="form-group">
                    <label>Descripcion</label>
                    <input name="description" type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['escuderia']->value->description;?>
" required>
                </div>
            </div>
        </div>

        <div class="form-group">
            <label>Posicion en el Campeonato de Constructores</label>
            <input name="pos_equipos" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['escuderia']->value->pos_equipos;?>
" required></input>
        </div>
        <div class="d-grid gap-2 d-md-flex justify-content-md-center">
            <button type="submit" class="btn btn-primary mt-2">Editar equipo</button>
        </div>
    </form>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
