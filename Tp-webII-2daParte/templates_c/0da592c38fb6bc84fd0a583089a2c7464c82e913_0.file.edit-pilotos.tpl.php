<?php
/* Smarty version 4.2.1, created on 2023-10-12 23:24:34
  from 'C:\xampp\htdocs\web2\Tp-webII-2daParte\templates\edit-pilotos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_65286412e158b7_80146827',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0da592c38fb6bc84fd0a583089a2c7464c82e913' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\Tp-webII-2daParte\\templates\\edit-pilotos.tpl',
      1 => 1697143724,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_65286412e158b7_80146827 (Smarty_Internal_Template $_smarty_tpl) {
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
" required>
                </div>
            </div>
            <div class="col-3">
                <div class="form-group">
                    <label>Posicion en el Campeonato de Pilotos</label>
                    <input name="campeonato" type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['pilotos']->value->campeonato;?>
" required>
                </div>
            </div>
        </div>

        <div class="form-group">
            <label>Puntos en el Campeonato de Piltos</label>
            <input name="puntos" class="form-control" rows="3" maxlength="200" required value="<?php echo $_smarty_tpl->tpl_vars['pilotos']->value->puntos;?>
"></input>
        </div>
        <div class="d-grid gap-2 d-md-flex justify-content-md-center">
            <button type="submit" class="btn btn-primary mt-2">Editar piloto</button>
        </div>
    </form>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
