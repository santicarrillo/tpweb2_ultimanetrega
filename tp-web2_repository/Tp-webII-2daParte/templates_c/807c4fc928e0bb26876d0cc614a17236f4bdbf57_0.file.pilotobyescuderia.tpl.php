<?php
/* Smarty version 4.2.1, created on 2023-10-11 03:26:15
  from 'D:\xampp\htdocs\Tp-webII-2daParte\templates\pilotobyescuderia.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6525f9b7aa1bd1_74377679',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '807c4fc928e0bb26876d0cc614a17236f4bdbf57' => 
    array (
      0 => 'D:\\xampp\\htdocs\\Tp-webII-2daParte\\templates\\pilotobyescuderia.tpl',
      1 => 1696987572,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6525f9b7aa1bd1_74377679 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'D:\\xampp\\htdocs\\Tp-webII-2daParte\\libs\\smarty-4.2.1\\libs\\plugins\\modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h1 class="display-2 container text-center">Conoce a los distintos pilotos de la Formula 1</h1>
<table class="table table-striped">
    <thead>
        <th></th>    
        <th>Nombre de los Pilotos</th>
        <th>Descripcion de los Pilotos</th>
        <th>Posicion en el Campeonato de Pilotos</th>
        <th>Puntos en el Campeonato de Pilotos</th>
        
        
    </thead> 
    
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pilotos']->value, 'piloto');
$_smarty_tpl->tpl_vars['piloto']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['piloto']->value) {
$_smarty_tpl->tpl_vars['piloto']->do_else = false;
?>

        <tr>
        <td> 
            <span> 
                <td><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['piloto']->value->nombre,25);?>
</td>
                <td><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['piloto']->value->descripcion,1000);?>
</td>
                <td><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['piloto']->value->campeonato,25);?>
</td> 
                <td><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['piloto']->value->puntos,25);?>
</td>
                <td>
                    <a href="pilotosbyescuderia/<?php echo $_smarty_tpl->tpl_vars['piloto']->value->id_escuderia;?>
" class="btn btn-secondary btn-sm">Ver escuderias</a>
                </td>
            </span> 
        </td>
        </tr>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        
</table>


<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
