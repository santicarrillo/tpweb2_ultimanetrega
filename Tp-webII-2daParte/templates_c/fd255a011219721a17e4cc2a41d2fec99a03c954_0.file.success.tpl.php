<?php
/* Smarty version 4.2.1, created on 2023-10-13 04:00:38
  from 'C:\xampp\htdocs\web2\Tp-webII-2daParte\templates\success.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6528a4c658a3b1_55275634',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fd255a011219721a17e4cc2a41d2fec99a03c954' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\Tp-webII-2daParte\\templates\\success.tpl',
      1 => 1697152952,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6528a4c658a3b1_55275634 (Smarty_Internal_Template $_smarty_tpl) {
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
