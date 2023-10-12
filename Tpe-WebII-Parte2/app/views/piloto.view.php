<?php

class PilotoView {
    public function showPilotos($pilotos) {
        require 'templates/header.tpl';

        require 'templates/form_alta.tpl';
        ?>

        <ul class="list-group">
        <?php foreach($pilotos as $piloto) { ?>
            <li class="list-group-item item-task">
                <div>
                    <b><?php echo $piloto->nombre ?></b> | (Prioridad <?php echo $piloto->campeonato ?>)
                </div>
                <div class="actions">
                    <?php if(!$piloto->puntos)?>
                    <a href="eliminar/<?php echo $piloto->id ?>" type="button" class='btn btn-danger ml-auto'>Borrar</a>
                    <a href="editar/<?php echo $piloto->id ?>" type="button" class='btn btn-danger ml-auto'>Editar</a>
                </div>
            </li>
        <?php } ?>
        </ul>

        <?php
        require 'templates/footer.tpl';
    }

    public function showError($error) {
        require 'templates/header.tpl';
        
        echo "
            <div class='alert alert-danger' role='alert'>
                $error
            </div> 
        ";
        require 'templates/footer.tpl';
    }

    function printEdit($editPiloto, $pilotos) {
        // asigno variables al tpl smarty
        $this->smarty->assign('count', count($pilotos));
        $this->smarty->assign('editarautores', $editPiloto);
        $this->smarty->assign('autores', $pilotos);

        // mostrar el tpl
        $this->smarty->display('PilotoList.tpl');
    }
}