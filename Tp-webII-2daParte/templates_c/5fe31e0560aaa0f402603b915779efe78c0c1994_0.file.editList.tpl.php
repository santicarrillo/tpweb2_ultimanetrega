<?php
/* Smarty version 4.2.1, created on 2022-10-18 00:57:53
  from 'C:\xampp\htdocs\Mai\templates\editList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634dddf15a3a26_52004881',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5fe31e0560aaa0f402603b915779efe78c0c1994' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Mai\\templates\\editList.tpl',
      1 => 1666047463,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_634dddf15a3a26_52004881 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container">

    <form class="form-edit" action="editar/<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" method="POST">

        <h2>Formulario de Edicion:</h2>
        <label>Autores</label>
<input name="autores" type="text" id="autores" class="form-control">
            <label>Nacionalidad</label>
            <input name="nacionalidad" type="text" class="form-control">

        <h3></h3>
        <input type="submit" class="btn btn-danger" value="actualizar">

    <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</div>









    




<?php }
}
