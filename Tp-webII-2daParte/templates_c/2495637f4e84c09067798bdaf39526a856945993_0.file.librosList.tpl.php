<?php
/* Smarty version 4.2.1, created on 2022-10-20 20:27:51
  from 'C:\xampp\htdocs\Tpe-WebII-Mai\templates\librosList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6351932707b551_21082207',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2495637f4e84c09067798bdaf39526a856945993' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Tpe-WebII-Mai\\templates\\librosList.tpl',
      1 => 1666290467,
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
function content_6351932707b551_21082207 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\Tpe-WebII-Mai\\libs\\smarty-4.2.1\\libs\\plugins\\modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
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
