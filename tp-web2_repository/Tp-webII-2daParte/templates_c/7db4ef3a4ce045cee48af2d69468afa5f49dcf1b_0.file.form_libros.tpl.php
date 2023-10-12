<?php
/* Smarty version 4.2.1, created on 2022-10-17 22:17:16
  from 'C:\xampp\htdocs\Mai\templates\form_libros.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634db84c9db349_84448868',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7db4ef3a4ce045cee48af2d69468afa5f49dcf1b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Mai\\templates\\form_libros.tpl',
      1 => 1666037816,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_634db84c9db349_84448868 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- formulario de alta de productos -->
<form action="addAutorByLibros" method="POST" class="my-4">
    <div class="row">
    <div class="col-5">
        <div class="form-group">
            <label>Autores</label>
            <select name="id_libros" type="number" class="form-control">
                <option> -- Seleccione -- </option>
                <option value = "1">Sebastian Fitzek </option>
                <option value = "2">Alex Mirez</option>
                <option value = "3">Gabriel García Márquez</option>
                <option value = "4">J.K Rowling</option>
                <option value = "5">Rick Riordan</option>
                <option value = "26">Agatha Christie</option>
            </select>
        </div>
        </div>
        <div class="form-group">
            <label>Titulo</label>
            <textarea name="titulo" class="form-control" rows="3"></textarea>
        </div>
        <div class="form-group">
        <label>Categoría</label>
            <select name="categoria" class="form-control">
                <option> -- Seleccione -- </option>
                <option value = "Thriller/Suspense">Thriller/Suspense</option>
                <option value = "Literatura Juvenil">Literatura Juvenil</option>
                <option value = "Ficcion Urbana">Ficcion Urbana</option>
                <option value = "Ficcion Infantil">Ficcion Infantil</option>
            </select>
        </div>
        <div class="form-group">
            <label>Fecha</label>
            <input name="fecha" type="number" class="form-control">
        </div>
        </div>
        <div class="form-group">
            <label>Precio</label>
            <textarea name="precio" class="form-control" rows="3"></textarea>
        </div>      
    
    <button type="submit" class="btn btn-primary mt-2">Guardar</button>
    

</form>








<?php }
}
