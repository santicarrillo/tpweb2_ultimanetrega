<?php

class PilotoModel {
    private $db;

    function __construct() {
        $this->db = new PDO('mysql:host=localhost;dbname=formula1;charset=utf8', 'root', '');
    }

    function getAllFormula1() {
        $query = $this->db->prepare('SELECT * FROM pilotos');
        $query->execute();
        $formula1 = $query->fetchAll(PDO::FETCH_OBJ);

        return $formula1;
    }

    public function getAllPilotos() {
        $query = $this->db->prepare("SELECT * FROM pilotos");
        $query->execute();
        
        $pilotos = $query->fetchAll(PDO::FETCH_OBJ); // devuelve un arreglo de objetos
        
        return $pilotos;
    }


    function getAll() {
        $query = $this->db->prepare("SELECT * FROM pilotos");
        $query->execute();
        $pilotos = $query->fetchAll(PDO::FETCH_OBJ); // devuelve un arreglo de productos
        
        return $pilotos;
    }


    function getPilotos() {
        $query = $this->db->prepare('SELECT * FROM pilotos');
        $query->execute();
        return $query->fetchAll(PDO::FETCH_OBJ);
    }


    function insertPiloto($nombre, $campeonato, $puntos) {
        $query = $this->db->prepare('INSERT INTO pilotos (nombre, campeonato, puntos) VALUES(?,?,?)');
        $query->execute([$nombre, $campeonato, $puntos]);

        return $this->db->lastInsertId();
    }

    


    function deletePilotoById($id) {
        $query = $this->db->prepare('DELETE FROM pilotos WHERE id = ?');
        $query->execute([$id]);
    }

    


    function getPiloto($id){
        $query = $this->db->prepare("SELECT * FROM pilotos WHERE id=?");
        $query->execute([$id]);
        $pilotos = $query->fetch(PDO::FETCH_OBJ);
        return $pilotos;
    }




    function updatePiloto($id, $nombre, $campeonato, $puntos) {    
        $query = $this->db->prepare('UPDATE pilotos SET nombre=?, $campeonato=?, puntos=? WHERE id = ?');
        $query->execute([$id, $nombre, $campeonato, $puntos]);
    }




    public function editPiloto($id, $nombre, $campeonato, $puntos) {
        $editarpilotos = $this->db->prepare("UPDATE escuderias SET equipos = ?, pilotos = ?, puntos_equipo = ?, pos_equipo = ? WHERE id=?");
        $editarpilotos->execute([$nombre, $campeonato, $puntos, $id]); //nombre-de-la-columna = valor[, nombre-de-la-columna=valor]
        return $editarpilotos;
    }

}