<?php
/* Smarty version 4.2.1, created on 2022-10-15 17:28:59
  from 'C:\xampp\htdocs\Mai\templates\editar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634ad1bba854d0_45763544',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c62d80549362d1926598f078d337d170e19f36c0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Mai\\templates\\editar.tpl',
      1 => 1665847718,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_634ad1bba854d0_45763544 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container">
      <h2>Formulario Para Editar</h2>
      <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['form_alta']->value;?>
editar">
        <input type="hidden" class="form-control" id="id" name="id" value="<?php echo $_smarty_tpl->tpl_vars['autor']->value["id"];?>
">
        <div class="form-group">
          <label for="autor">Autor</label>
          <input type="text" class="form-control" id="autor" name="autor" value="<?php echo $_smarty_tpl->tpl_vars['autor']->value["autor"];?>
">
        </div>
        <div class="form-group">
          <label for="nacionalidad">Nacionalidad</label>
          <input type="text" class="form-control" id="nacionalidad" name="nacionalidad" value="<?php echo $_smarty_tpl->tpl_vars['autor']->value["nacionalidad"];?>
">
        </div>
        <button type="submit" class="btn btn-primary">Editar Tarea</button>
      </form>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['libro']->value, 'autor');
$_smarty_tpl->tpl_vars['autor']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['autor']->value) {
$_smarty_tpl->tpl_vars['autor']->do_else = false;
?>
        <form action="<?php echo $_smarty_tpl->tpl_vars['fomr_alta']->value;?>
 editar/<?php echo $_smarty_tpl->tpl_vars['autor']->value->id;?>
" method="POST">
            <input type="hidden" name="id" values="<?php echo $_smarty_tpl->tpl_vars['autor']->value->id;?>
" placeholder="autor">
            autores <input type="text" name="autores" value="<?php echo $_smarty_tpl->tpl_vars['autor']->value->{$_smarty_tpl->tpl_vars['autores']->value};?>
" placeholder="autores">
            nacionalidad <input type="text" name="nacionalidad" value="<?php echo $_smarty_tpl->tpl_vars['autor']->value->{$_smarty_tpl->tpl_vars['nacionalidad']->value};?>
" placeholder="nacionalidad">

            <input type="submit" value="Guardar Cambios">
        </form>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
<?php }
}
