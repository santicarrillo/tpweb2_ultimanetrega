<?php

class PilotoModel {

    private $db;

    //Abro la conexion
    function __construct(){
        $this->db = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME .';charset='.DB_Charset,DB_USER,DB_PASS);
        $this->deploy();
    }

    //filtro
    function getAllFilter($field, $value, $limit, $offset, $sort, $order){
        $query = $this->db->prepare("SELECT * FROM pilotos WHERE $field = $value ORDER BY $sort $order LIMIT $offset, $limit");
        $query->execute();

        $pilotos = $query->fetchAll(PDO::FETCH_OBJ); 

        return $pilotos;
    }
    function getpilotos() {
        $query = $this->db->prepare('SELECT * FROM pilotos');
        $query->execute();

        // $tasks es un arreglo de tareas
         return $query->fetchAll(PDO::FETCH_OBJ);
         
    }

    function get($id){
        $query = $this->db->prepare('SELECT * FROM pilotos WHERE id = ?');
        $query->execute([$id]);
        $piloto = $query->fetch(PDO::FETCH_OBJ);

        return $piloto;
    }

    function insert($nombre, $campeonato, $puntos, $id_escuderia){
        $query = $this->db->prepare("INSERT INTO pilotos (nombre, campeonato, puntos, id_escuderia) VALUE (?, ?, ?, ?)");
        $query->execute([$nombre, $campeonato, $puntos, $id_escuderia]);

        return $this->db->lastInsertId();
    }

}