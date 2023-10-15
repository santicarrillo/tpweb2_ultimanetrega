<?php
/* Smarty version 4.2.1, created on 2023-10-16 00:27:16
  from 'C:\xampp\htdocs\web2\Tp-webII-2daParte\templates\edit-pilotos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_652c6744068b52_88377727',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0da592c38fb6bc84fd0a583089a2c7464c82e913' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\Tp-webII-2daParte\\templates\\edit-pilotos.tpl',
      1 => 1697353942,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_652c6744068b52_88377727 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <h1 class="display-5 mt-5 text-center">Editar piloto</h1>
        <div class="row justify-content-md-center">
            <form action="editpiloto/<?php echo $_smarty_tpl->tpl_vars['piloto']->value->id;?>
" method="POST" class="my-4">
                <div class="row justify-content-md-center">
                    <div class="col-9">
                        <div class="form-group">
                            <label>Nombre</label>
                            <input name="nombre" type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['piloto']->value->nombre;?>
" required>
                        </div>
                    </div>
                    <div class="col-9">
                        <div class="form-group">
                            <label>Campeonato</label>
                            <input name="campeonato" type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['piloto']->value->campeonato;?>
" required>
                        </div>
                    </div>
                    <div class="col-9">
                        <div class="form-group">
                            <label>Puntos</label>
                            <input name="puntos" type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['piloto']->value->puntos;?>
" required>
                        </div>
                    </div>
                </div>
                <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                    <button type="submit" class="btn btn-primary mt-2">Editar piloto</button>
                </div>
            </form>  
        </div>


<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
