<?php
/* Smarty version 4.2.1, created on 2023-10-10 22:13:48
  from 'C:\xampp\htdocs\web2\Tp-webII-2daParte\templates\about.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6525b07c8bfe86_76259755',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0ad33c8c75a75989170cfc84bbc80fe30e767e11' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\Tp-webII-2daParte\\templates\\about.tpl',
      1 => 1696800011,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6525b07c8bfe86_76259755 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\web2\\Tp-webII-2daParte\\libs\\smarty-4.2.1\\libs\\plugins\\modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <main class="container mt-5">
     <div class="col">
            <div class="center" style="width: 80rem">
                <img class="card-img-top" src="images/5.jpg">        
            </div>
        </div>
    </main>


<table class="table table-striped">
    <thead>
        <th></th>    
        <th>Fecha de la Carrera</th>
        <th>Nombre del Circuito y País</th>
        <th>Resultado final y Podio</th>
        
    </thead> 
    
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['formula1']->value, 'calendario');
$_smarty_tpl->tpl_vars['calendario']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['calendario']->value) {
$_smarty_tpl->tpl_vars['calendario']->do_else = false;
?>

        <tr>
        <td> 
            <span> 
                <td><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['calendario']->value->fecha,25);?>
</td> 
                <td><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['calendario']->value->circuito,40);?>
</td> 
                <td><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['calendario']->value->podio,40);?>
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
