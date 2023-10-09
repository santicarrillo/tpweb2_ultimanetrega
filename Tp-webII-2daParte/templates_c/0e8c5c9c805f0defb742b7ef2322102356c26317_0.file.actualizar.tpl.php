<?php
/* Smarty version 4.2.1, created on 2022-10-09 21:17:33
  from 'C:\xampp\htdocs\Mai\templates\actualizar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63431e4d909938_35868354',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0e8c5c9c805f0defb742b7ef2322102356c26317' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Mai\\templates\\actualizar.tpl',
      1 => 1665334523,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63431e4d909938_35868354 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
    <head>
    <base href="<?php echo BASE_URL;?>
">
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Actualizar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
        <div class="container mt-5">
            <form action="autor.controller.php" method="POST">

            <input type="hidden" name="id" value="<?php echo '<?php'; ?>
 echo $row['id']  <?php echo '?>'; ?>
">

                    <input type="text" class="form-control mb-3" name="id" placeholder="Id" value="<?php echo '<?php'; ?>
 echo $row['id']  <?php echo '?>'; ?>
">            
                    <input type="text" class="form-control mb-3" name="autor" placeholder="Autor" value="<?php echo '<?php'; ?>
 echo $row['autor']  <?php echo '?>'; ?>
">
                    <input type="text" class="form-control mb-3" name="nacionalidad" placeholder="Nacionalidad" value="<?php echo '<?php'; ?>
 echo $row['nacionalidad']  <?php echo '?>'; ?>
">
                                
                <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
            </form>
                    
        </div>
    </body>
</html>
<?php }
}
