<?php
/* Smarty version 4.2.1, created on 2023-10-12 23:45:11
  from 'C:\xampp\htdocs\Tp-webII-2daParte\templates\edit-pilotos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_652868e7b40f72_92978931',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '71e6041976b413d8a117a4c765d0bc7bba4740eb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Tp-webII-2daParte\\templates\\edit-pilotos.tpl',
      1 => 1697147107,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_652868e7b40f72_92978931 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h1 class="display-5 mt-5 text-center">Editar piloto</h1>
<div class="row justify-content-md-center">
    <form action="editpiloto/<?php echo $_smarty_tpl->tpl_vars['pilotos']->value->id;?>
" method="POST" class="my-5" enctype="multipart/form-data">
        <div class="row">
            <div class="col-9">
                <div class="form-group">
                    <label>Piloto</label>
                    <input name="nombre" type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['pilotos']->value->nombre;?>
">
                </div>
            </div>
            <div class="col-9">
                <div class="form-group">
                    <label>Posicion en el Campeonato de Pilotos</label>
                    <input name="campeonato" type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['pilotos']->value->campeonato;?>
">
                </div>
            </div>
            <div class="col-9">
                <div class="form-group">
                    <label>Puntos en el Campeonato de Pilotos</label>
                    <input name="puntos" type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['pilotos']->value->puntos;?>
">
                </div>
            </div>
        </div>
        <div class="d-grid gap-2 d-md-flex justify-content-md-center">
            <input type="submit" class="btn btn-danger" value="Editar piloto">
        </div>
    </form>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
