<?php
/* Smarty version 4.2.1, created on 2022-10-18 01:25:35
  from 'C:\xampp\htdocs\Mai\templates\AutorByLibros.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634de46f783844_19889447',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1f6c1485b031fcfe0f2da043baaf8761df739d87' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Mai\\templates\\AutorByLibros.tpl',
      1 => 1666049131,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_634de46f783844_19889447 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\Mai\\libs\\smarty-4.2.1\\libs\\plugins\\modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
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
