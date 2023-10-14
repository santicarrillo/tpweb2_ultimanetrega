<?php
/* Smarty version 4.2.1, created on 2023-10-13 17:55:17
  from 'C:\xampp\htdocs\Tp-webII-2daParte\templates\edit-pilotos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_652968659bbe35_11977112',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '71e6041976b413d8a117a4c765d0bc7bba4740eb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Tp-webII-2daParte\\templates\\edit-pilotos.tpl',
      1 => 1697212343,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_652968659bbe35_11977112 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container">

    <form action="edit/<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" method="POST">
        <h1 class="display-5 mt-5 text-center">Editar piloto</h1>
        <label>Piloto</label>
            <input name="nombre" type="text" id="nombre" class="form-control">
        <label>Posicion en el Campeonato de Pilotos</label>
            <input name="campeonato" type="text" class="form-control">
        <label>Puntos en el Campeonato de Pilotos</label>
            <input name="puntos" type="text" class="form-control">

        <h3></h3>
        <input type="submit" class="btn btn-danger" value="editar piloto">

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
