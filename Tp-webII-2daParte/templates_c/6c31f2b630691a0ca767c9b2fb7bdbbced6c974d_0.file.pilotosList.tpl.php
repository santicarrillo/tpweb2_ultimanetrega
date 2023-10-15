<?php
/* Smarty version 4.2.1, created on 2023-10-16 00:22:51
  from 'C:\xampp\htdocs\web2\Tp-webII-2daParte\templates\pilotosList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_652c663b496d11_28801510',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6c31f2b630691a0ca767c9b2fb7bdbbced6c974d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\Tp-webII-2daParte\\templates\\pilotosList.tpl',
      1 => 1697165059,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:img_formalta.tpl' => 1,
    'file:form_alta.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_652c663b496d11_28801510 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\web2\\Tp-webII-2daParte\\libs\\smarty-4.2.1\\libs\\plugins\\modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:img_formalta.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php if ((isset($_SESSION['USER_ID']))) {?>
    <?php $_smarty_tpl->_subTemplateRender("file:form_alta.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}?>

<table class="table table-striped">
    <thead>
        <th></th>    
        <th>Nombre de los Pilotos</th>
        <th>Posicion en el Campeonato de Pilotos</th>
        <th>Puntos en el Campeonato de Pilotos</th>
        
        
    </thead> 
    
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['formula1']->value, 'pilotos');
$_smarty_tpl->tpl_vars['pilotos']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['pilotos']->value) {
$_smarty_tpl->tpl_vars['pilotos']->do_else = false;
?>

        <tr>
        <td> 
            <span> 
                <td><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['pilotos']->value->nombre,25);?>
</td> 
                <td><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['pilotos']->value->campeonato,25);?>
</td> 
                <td><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['pilotos']->value->puntos,25);?>
</td>
            <?php if ((isset($_SESSION['USER_ID']))) {?>
                <td><a href='editPilotosform/<?php echo $_smarty_tpl->tpl_vars['pilotos']->value->id;?>
' type='button' class='btn btn-info'>Editar</a></td>
                <td><a href='eliminarPilotos/<?php echo $_smarty_tpl->tpl_vars['pilotos']->value->id;?>
' type='button' class='btn btn-danger'>Borrar</a></td>
            <?php }?>           
            </span> 
        </td>
        </tr>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        
</table>

 
<p class="mt-3"><small>Mostrando <?php echo $_smarty_tpl->tpl_vars['count']->value;?>
 Pilotos</small></p>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
   





<?php }
}
