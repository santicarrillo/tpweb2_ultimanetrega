<?php
/* Smarty version 4.2.1, created on 2023-10-15 01:54:08
  from 'C:\xampp\htdocs\Tp-webII-2daParte\templates\escuderias.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_652b2a20eff057_01149411',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f1dcaff0aef413e85aef58890a63b9f2c01b63b7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Tp-webII-2daParte\\templates\\escuderias.tpl',
      1 => 1697327646,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_652b2a20eff057_01149411 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Equipos</th>
      <th scope="col">Pilotos</th>
      <th scope="col">Puntos Por Equipo</th>
      <th scope="col">Posicion en el Campeonato</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Red Bull</td>
      <td>Max Verstappen y Sergio Pérez</td>
      <td>583</td>
      <td>1</td>
    </tr>
    <tr>
      <td>Mercedes AMG F1</td>
      <td>Lewis Hamilton y George Russell</td>
      <td>273</td>
      <td>2</td>
    </tr>
    <tr>
      <td>Ferrari</td>
      <td>Carlos Sainz y Charles Leclerc</td>
      <td>228</td>
      <td>3</td>
    </tr>
    <tr>
      <td>Aston Martin</td>
      <td>Fernando Alonso y Lance Stroll</td>
      <td>217</td>
      <td>4</td>
    </tr>
    <tr>
      <td>Mclaren</td>
      <td>Lando Norris y Oscar Piastri</td>
      <td>115</td>
      <td>5</td>
    </tr>
    <tr>
      <td>Alpine</td>
      <td>Pierre Gasly y Esteban Ocon</td>
      <td>73</td>
      <td>6</td>
    </tr>
    <tr>
      <td>Williams</td>
      <td>Alexander Albon y Logan Sargeant</td>
      <td>21</td>
      <td>7</td>
    </tr>
    <tr>
      <td>Haas</td>
      <td>Kevin Magnussen  y Nico Hülkenberg</td>
      <td>12</td>
      <td>8</td>
    </tr>
    <tr>
      <td>Alfa Romeo</td>
      <td>Valtteri Bottas y Zhou Guanyu</td>
      <td>10</td>
      <td>9</td>
    </tr>
    <tr>
      <td>AlphaTauri</td>
      <td>Yuki Tsunoda y Liam Lawson</td>
      <td>3</td>
      <td>10</td>
    </tr>
  </tbody>
</table>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
