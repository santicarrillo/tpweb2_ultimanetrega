<?php
/* Smarty version 4.2.1, created on 2022-10-15 01:17:43
  from 'C:\xampp\htdocs\Mai\templates\form_alta.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6349ee17e3afb7_17241337',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '36abfe486263332dcf5a78b8b2dee5d9cbc05085' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Mai\\templates\\form_alta.tpl',
      1 => 1665789457,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6349ee17e3afb7_17241337 (Smarty_Internal_Template $_smarty_tpl) {
?><form action="add" method="POST" class="my-4">
    <div class="row">
        <div class="col-5">
            <div class="form-group">
                <label>Autores</label>
                <input name="autor" type="text" class="form-control">
            </div>
        </div>
    <div class="form-group">
        <label>Nacionalidad</label>
        <textarea name="nacionalidad" class="form-control" rows="3"></textarea>
    </div>

    <button type="submit" class="btn btn-primary mt-2">Guardar</button>
</form>

<?php }
}
