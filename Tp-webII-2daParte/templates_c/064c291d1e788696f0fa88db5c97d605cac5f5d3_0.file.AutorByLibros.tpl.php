<?php
/* Smarty version 4.2.1, created on 2022-10-20 00:58:49
  from 'C:\xampp\htdocs\Tpe-WebII-Mai\templates\AutorByLibros.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63508129a62959_57547249',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '064c291d1e788696f0fa88db5c97d605cac5f5d3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Tpe-WebII-Mai\\templates\\AutorByLibros.tpl',
      1 => 1666219924,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_63508129a62959_57547249 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\Tpe-WebII-Mai\\libs\\smarty-4.2.1\\libs\\plugins\\modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<table class="table table-striped">

    <thead>
        <th></th>            
    </thead> 
       <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['AutoresByLibros']->value, 'libros');
$_smarty_tpl->tpl_vars['libros']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['libros']->value) {
$_smarty_tpl->tpl_vars['libros']->do_else = false;
?>
        <tr>
            <td> <?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['libros']->value->autores,25);?>
 </td>
            <td> <?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['libros']->value->titulo,25);?>
 </td>
            <td> <?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['libros']->value->categoria,25);?>
 </td>
            <td> <?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['libros']->value->fecha,25);?>
 </span> </td>
            <td> <?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['libros']->value->precio,25);?>
 </td>
            <td><a href='deleteAutorByLibros/<?php echo $_smarty_tpl->tpl_vars['libros']->value->id_libros;?>
' type='button' class='btn btn-danger'>Borrar</a></td>
            <td><a href='form/<?php echo $_smarty_tpl->tpl_vars['libros']->value->id_libros;?>
' type='button' class='btn btn-info'>Editar</a></td>
        </tr>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </tr>
</table>



<p class="mt-3"><small>Mostrando <?php echo $_smarty_tpl->tpl_vars['count']->value;?>
 autores y sus libros</small></p>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
