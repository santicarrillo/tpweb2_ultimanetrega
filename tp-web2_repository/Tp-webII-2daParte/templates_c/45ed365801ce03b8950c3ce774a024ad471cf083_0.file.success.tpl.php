<?php
/* Smarty version 4.2.1, created on 2023-10-12 19:46:23
  from 'C:\xampp\htdocs\Tp-webII-2daParte\templates\success.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_652830ef24cd34_88300448',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '45ed365801ce03b8950c3ce774a024ad471cf083' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Tp-webII-2daParte\\templates\\success.tpl',
      1 => 1697132642,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_652830ef24cd34_88300448 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php if ($_smarty_tpl->tpl_vars['success']->value) {?>
    <div class="alert alert-success container text-center " role="alert">
        <h4 class="alert-heading">Acción exitosa</h4>
        <hr>
        <a href="<?php echo BASE_URL;?>
" class="btn btn-light">Volver a la pagina principal</a>
    </div> 
<?php } else { ?>
    <div class="alert alert-danger container text-center " role="alert">
        <h4 class="alert-heading">Error</h4>
        <p><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</p>
        <hr>
        <a href="<?php echo BASE_URL;?>
" class="btn btn-light">Volver a la pagina principal</a>
    </div> 
<?php }?>
  
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
