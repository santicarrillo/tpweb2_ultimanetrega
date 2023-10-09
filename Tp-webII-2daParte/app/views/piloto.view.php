<?php
require_once './libs/smarty-4.2.1/libs/Smarty.class.php';

class PilotoView {

    private $smarty;

    public function __construct() {
        $this->smarty = new Smarty(); 
    }


    public function showFormula1($formula1) {

        $this->smarty->assign('count', count($formula1));
        $this->smarty->assign('formula1', $formula1);

        $this->smarty->display('pilotosList.tpl');
    }

    function showPilotos(){
        header("Location: " .BASE_URL."pilotos");
    }

    function showPiloto(){
        header("Location: ".BASE_URL."pilotos");
    }
    

    function printEdit($editarpiloto, $piloto){
        $this->smarty->assign('count', count($piloto));
        $this->smarty->assign('editarpiloto', $editarpiloto);
        $this->smarty->assign('piloto', $piloto);

        $this->smarty->display('pilotosList.tpl');
    }

    
    public function showError($error) {
        require 'templates/header.php';
        
        echo "
            <div class='alert alert-danger' role='alert'>
                $error
            </div> 
        ";
        require 'templates/footer.php';
    }

    }

 
/*<ul class="list-group">
<?php foreach($pilotos as $piloto) { ?>
    <li class="list-group-item item-task" >
        <div>
            <b><?php echo $piloto->nombre ?></b> | Posicion del Campeonato: <?php echo $piloto->campeonato ?> | Puntos: <?php echo $piloto->puntos ?>
        </div>
        <div class="actions">
            <a href="editar/<?php echo $piloto->id ?>" type="button" class='btn btn-danger ml-auto'>Editar</a>
            <a href="eliminar/<?php echo $piloto->id ?>" type="button" class='btn btn-danger ml-auto'>Borrar</a>
        </div>
    </li>
<?php } ?>
</ul>

    <?php
    require 'templates/footer.php';
*/