<?php
/* Smarty version 4.2.1, created on 2022-10-18 01:48:27
  from 'C:\xampp\htdocs\TPE_Web_Mai\templates\autorList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634de9cb8b12d5_02134038',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '19dc74333efb3b132f2cdedfa6589f812c59f585' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE_Web_Mai\\templates\\autorList.tpl',
      1 => 1666047395,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:form_alta.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_634de9cb8b12d5_02134038 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\TPE_Web_Mai\\libs\\smarty-4.2.1\\libs\\plugins\\modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:form_alta.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<ul class="list-group">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['libro']->value, 'autor');
$_smarty_tpl->tpl_vars['autor']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['autor']->value) {
$_smarty_tpl->tpl_vars['autor']->do_else = false;
?>
        <li class='
                list-group-item d-flex justify-content-between align-items-center'>
            <span> <b><?php echo $_smarty_tpl->tpl_vars['autor']->value->autores;?>
</b> - <?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['autor']->value->nacionalidad,25);?>
</span>
            <div class="ml-auto">
                <a href='form/<?php echo $_smarty_tpl->tpl_vars['autor']->value->id;?>
' type='button' class='btn btn-info'>Editar</a>
                <a href='delete/<?php echo $_smarty_tpl->tpl_vars['autor']->value->id;?>
' type='button' class='btn btn-danger'>Borrar</a>
            </div>
        </li>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>


<p class="mt-3"><small>Mostrando <?php echo $_smarty_tpl->tpl_vars['count']->value;?>
 autores</small></p>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>












<?php }
}
