<?php
/* Smarty version 4.2.1, created on 2022-10-08 05:51:17
  from 'C:\xampp\htdocs\todo-list-main\templates\form_alta.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6340f3b5ef9f65_51308556',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '19a1c006f31a247662b2e53a9deb4f5fa3617b13' => 
    array (
      0 => 'C:\\xampp\\htdocs\\todo-list-main\\templates\\form_alta.tpl',
      1 => 1665197099,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6340f3b5ef9f65_51308556 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- formulario de alta de tarea -->
<form action="add" method="POST" class="my-4">
    <div class="row">
        <div class="col-9">
            <div class="form-group">
                <label>Autores</label>
                <input name="title" type="text" class="form-control">
            </div>
        </div>
    <div class="form-group">
        <label>Nacionalidad</label>
        <textarea name="description" class="form-control" rows="3"></textarea>
    </div>

    <button type="submit" class="btn btn-primary mt-2">Guardar</button>
</form><?php }
}
