<?php
require_once 'config.php';
class AboutModel {
    private $db;

    function __construct() {
        $this->db = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME .';charset='.DB_Charset,DB_USER,DB_PASS );
    }

    public function getAllAbouts() {
        $query = $this->db->prepare("SELECT * FROM calendario");
        $query->execute();

        // 3. obtengo los resultados
        $calendarios = $query->fetchAll(PDO::FETCH_OBJ); // devuelve un arreglo de objetos
        
        return $calendarios;
    }
    /**
     * Obtiene y devuelve de la base de datos todas las tareas.
     */
    function getAbouts() {
        $query = $this->db->prepare('SELECT * FROM calendario');
        $query->execute();

        // $tasks es un arreglo de tareas
        $calendarios = $query->fetchAll(PDO::FETCH_OBJ);

        return $calendarios;
    }


    

}