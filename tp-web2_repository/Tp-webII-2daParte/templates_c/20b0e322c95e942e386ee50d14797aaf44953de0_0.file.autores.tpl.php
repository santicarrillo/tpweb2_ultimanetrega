<?php
/* Smarty version 4.2.1, created on 2022-10-21 02:29:38
  from 'C:\xampp\htdocs\Tpe-WebII-Mai\templates\autores.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6351e7f2baabe0_43597720',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '20b0e322c95e942e386ee50d14797aaf44953de0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Tpe-WebII-Mai\\templates\\autores.tpl',
      1 => 1666312175,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6351e7f2baabe0_43597720 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div>
<h2>Lista de Autores</h2>
<li class='list-group-item d-flex justify-content-between align-item-center'>
    <div class="autoresTable">
    <table class="table table-striped">
        <thead class="autoresThead">
            <tr>
                <td>Autores</td>
            </tr>
        </thead>
        <tbody class="autoresTbody">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['autor']->value, 'a');
$_smarty_tpl->tpl_vars['a']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['a']->value) {
$_smarty_tpl->tpl_vars['a']->do_else = false;
?>
            <tr>
                <td><a href="a/<?php echo $_smarty_tpl->tpl_vars['a']->value->id_autor;?>
"><?php echo $_smarty_tpl->tpl_vars['a']->value->autores;?>
</a></td>
            </tr>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </tbody>
    </table>
    </div>
</li>

    

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
