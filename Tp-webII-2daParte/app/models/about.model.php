<?php

class AboutModel {
    private $db;

    function __construct() {
        $this->db = new PDO('mysql:host=localhost;dbname=formula1;charset=utf8', 'root', '');
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