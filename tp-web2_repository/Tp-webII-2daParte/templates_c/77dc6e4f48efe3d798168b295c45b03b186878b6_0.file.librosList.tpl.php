<?php
/* Smarty version 4.2.1, created on 2023-10-03 16:10:33
  from 'C:\xampp\htdocs\Mai\templates\librosList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_651c20d9d78ef4_33867974',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '77dc6e4f48efe3d798168b295c45b03b186878b6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Mai\\templates\\librosList.tpl',
      1 => 1696339304,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:form_libros.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_651c20d9d78ef4_33867974 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\Mai\\libs\\smarty-4.2.1\\libs\\plugins\\modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<table class="table table-striped">
    <thead>
        <th></th>    
        <th>Autores</th>
        <th>Titulo</th>
        <th>Categoria</th>
        <th>Fecha</th>
        <th>Precio</th>
        
    </thead>     

        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['libros']->value, 'libro');
$_smarty_tpl->tpl_vars['libro']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['libro']->value) {
$_smarty_tpl->tpl_vars['libro']->do_else = false;
?>
    <tr>
        <td> 
            <span> 
                <td><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['libro']->value->autores,25);?>
</td> 
                <td><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['libro']->value->titulo,25);?>
</td> 
                <td><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['libro']->value->categoria,25);?>
</td>
                <td><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['libro']->value->fecha,25);?>
</td>
                <td><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['libro']->value->precio,25);?>
</td>
                
            </span> 
        </td>
                
    </tr>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

</table>

<p class="mt-3"><small>Mostrando <?php echo $_smarty_tpl->tpl_vars['count']->value;?>
 libros</small></p>

<?php if ((isset($_SESSION['USER_ID']))) {?>
    <?php $_smarty_tpl->_subTemplateRender("file:form_libros.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <?php }?>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
