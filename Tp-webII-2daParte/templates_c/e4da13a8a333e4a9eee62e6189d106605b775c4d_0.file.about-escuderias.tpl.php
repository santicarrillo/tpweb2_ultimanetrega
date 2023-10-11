<?php
/* Smarty version 4.2.1, created on 2023-10-11 01:25:43
  from 'D:\xampp\htdocs\Tp-webII-2daParte\templates\about-escuderias.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6525dd77ef5042_03341002',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e4da13a8a333e4a9eee62e6189d106605b775c4d' => 
    array (
      0 => 'D:\\xampp\\htdocs\\Tp-webII-2daParte\\templates\\about-escuderias.tpl',
      1 => 1696980341,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6525dd77ef5042_03341002 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="row justify-content-md-center container text-center mt-5 mb-5" >
    <div class="card" id="cardEscuderias">
        <?php if ((isset($_smarty_tpl->tpl_vars['escuderias']->value->img))) {?>
        <div><img src="<?php echo $_smarty_tpl->tpl_vars['escuderias']->value->img;?>
"></div>
            <hr>
        <?php }?>
        <div class="card-body">
            <h5 class="card-title display-6"><?php echo $_smarty_tpl->tpl_vars['escuderias']->value->equipos;?>
</h5> 
            <h6 class="card-subtitle mb-2 text-muted"><?php echo $_smarty_tpl->tpl_vars['escuderias']->value->pilotos;?>
</h6>
            <p class="card-text"><?php echo $_smarty_tpl->tpl_vars['escuderias']->value->pos_equipos;?>
</p>
            <p class="card-text"><?php echo $_smarty_tpl->tpl_vars['escuderias']->value->description;?>
</p>
            <a class="btn btn-primary mt-2" href="<?php echo BASE_URL;?>
">Volver</a>
        </div>
    </div>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
