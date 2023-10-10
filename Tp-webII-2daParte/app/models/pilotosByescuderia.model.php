<?php

class PilotosByEscuderiamodel {

    private $db;

    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;'.'dbname=formula1;charset=utf8', 'root', '');
    }

    public function getAllPilotosByEscuderia() {
     
        $query = $this->db->prepare("SELECT * FROM escuderias");
        $query->execute();

        $formula1 = $query->fetchAll(PDO::FETCH_OBJ);
        
        return $formula1;
    }

    /*** Devuelve la lista de productos por categoria.*/
    function getPilotosByEscuderia() {
        // 1. abro conexión a la DB
        // ya esta abierta por el constructor de la clase

        // 2. ejecuto la sentencia (2 subpasos)

        $query = $this->db->prepare("SELECT escuderias.*, escuderias.equipos, escuderias.pilotos, escuderias.puntos_equipo, escuderias.pos_equipos FROM pilotos JOIN escuderias ON escuderias.id=pilotos.id_escuderia");
        $query->execute();

            // 3. obtengo los resultados
        $PilotosByEscuderia = $query->fetchAll(PDO::FETCH_OBJ); 
        
        return $PilotosByEscuderia;

       // var_dump($query->errorInfo());
    }

}