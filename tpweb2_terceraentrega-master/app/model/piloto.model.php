<?php

class PilotoModel {

    private $db;

    //Abro la conexion
    function __construct(){
        $this->db = new PDO('mysql:host='. MYSQL_HOST .';dbname='. MYSQL_DB .';charset=utf8', MYSQL_USER, MYSQL_PASS);
        $this->deploy();
    }

    //filtro
    function getAllFilter($field, $value, $limit, $offset, $sort, $order){
        $query = $this->db->prepare("SELECT * FROM pilotos WHERE $field = $value ORDER BY $sort $order LIMIT $offset, $limit");
        $query->execute();

        $pilotos = $query->fetchAll(PDO::FETCH_OBJ); 

        return $pilotos;
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