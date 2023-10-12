<?php
/* Smarty version 4.2.1, created on 2023-10-11 20:24:55
  from 'C:\xampp\htdocs\Tp-webII-2daParte\templates\about-escuderias.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6526e877a333f0_86039139',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '55e465f063be941e42582173009016ceaee5559c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Tp-webII-2daParte\\templates\\about-escuderias.tpl',
      1 => 1697048692,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6526e877a333f0_86039139 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\Tp-webII-2daParte\\libs\\smarty-4.2.1\\libs\\plugins\\modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
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
            <p class="card-text">Pocision del Campeonato de Constructores: <?php echo $_smarty_tpl->tpl_vars['escuderias']->value->pos_equipos;?>
</p>
            <p class="card-text"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['escuderias']->value->description,10000);?>
</p>
            <a class="btn btn-primary mt-2" href="<?php echo BASE_URL;?>
">Volver</a>
        </div>
    </div>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
