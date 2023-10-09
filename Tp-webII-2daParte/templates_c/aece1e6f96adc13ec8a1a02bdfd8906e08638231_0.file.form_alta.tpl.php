<?php
/* Smarty version 4.2.1, created on 2022-10-18 02:13:13
  from 'C:\xampp\htdocs\Tpe-WebII-Mai\templates\form_alta.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634def99f09c97_61995165',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aece1e6f96adc13ec8a1a02bdfd8906e08638231' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Tpe-WebII-Mai\\templates\\form_alta.tpl',
      1 => 1665789457,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_634def99f09c97_61995165 (Smarty_Internal_Template $_smarty_tpl) {
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
