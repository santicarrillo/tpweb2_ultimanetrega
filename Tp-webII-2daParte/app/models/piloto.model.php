<?php
require_once 'config.php';
class PilotoModel {
    private $db;

    function __construct() {
        $this->db = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME .';charset='.DB_Charset,DB_USER,DB_PASS );
    }

    function getAllFormula1() {
        $query = $this->db->prepare('SELECT * FROM pilotos');
        $query->execute();
        $formula1 = $query->fetchAll(PDO::FETCH_OBJ);

        return $formula1;
    }


    function getAll() {
        $query = $this->db->prepare("SELECT * FROM pilotos");
        $query->execute();
        $pilotos = $query->fetchAll(PDO::FETCH_OBJ); // devuelve un arreglo de productos
        
        return $pilotos;
    }


    function getPilotos($id) {
        $query = $this->db->prepare('SELECT * FROM pilotos WHERE id = ?');
        $query->execute([$id]);
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
        $piloto = $query->fetch(PDO::FETCH_OBJ);
        return $piloto;
    }


    public function getAllPilotos() {
        $query = $this->db->prepare("SELECT * FROM pilotos");
        $query->execute();
        
        $pilotos = $query->fetchAll(PDO::FETCH_OBJ); // devuelve un arreglo de objetos
        
        return $pilotos;
        
    }

    function updatePiloto($id, $nombre, $campeonato, $puntos){
        $query = $this->db->prepare('UPDATE `pilotos` SET nombre = ? , campeonato = ? , puntos = ? WHERE id = ?');
        $query->execute([$id, $nombre, $campeonato, $puntos]);
    }
    
    function getByEscuderias($id_escuderias){
        $query = $this->db->prepare("SELECT * FROM pilotos WHERE id = ?");
        $query->execute([$id_escuderias]);
        $pilotos = $query->fetchAll(PDO::FETCH_OBJ); // devuelve un arreglo de productos
        
        return $pilotos;
    }

    function editById($nombre,$campeonato,$puntos,$id){
        $query = $this->db->prepare('UPDATE `pilotos` SET nombre = ?, campeonato = ?, puntos = ? WHERE id = ?');
        $query->execute([$nombre, $campeonato, $puntos, $id]);
    }
    


}