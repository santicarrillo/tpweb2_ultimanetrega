<?php

class EscuderiasModel {

    private $db;

    //Abro la conexion
    function __construct(){
        $this->db = new PDO('mysql:host='. DB_HOST .';dbname='.DB_NAME .';charset='.DB_Charset,  DB_USER, DB_PASS);
    }
    
    //Devuelve la cantidad total de registros de la tabla de la bbdd
    function count(){
        $query = $this->db->prepare("SELECT count(*) FROM escuderias");
        $query->execute();
        $total = $query->fetchColumn();
        return $total;
    }
    //filtro
    function getAllFilter($field, $value, $limit, $offset, $sort, $order){
        $query = $this->db->prepare("SELECT * FROM escuderias WHERE $field = $value ORDER BY $sort $order LIMIT $offset, $limit");
        $query->execute();

        $escuderias = $query->fetchAll(PDO::FETCH_OBJ); 

        return $escuderias;
        }
    //Orden y paginacion
    function getAll(){
        $query = $this->db->prepare("SELECT * FROM escuderias");
        $query->execute();
        
        $escuderias = $query->fetchAll(PDO::FETCH_OBJ); // devuelve un arreglo de productos
        
        return $escuderias;
    }

    function get($id){
        $query = $this->db->prepare('SELECT * FROM escuderias WHERE id = ?');
        $query->execute([$id]);
        $escuderia = $query->fetch(PDO::FETCH_OBJ);

        return $escuderia;
    }

    function insert($equipos, $description , $puntos_equipo, $pos_equipos){
        $query = $this->db->prepare("INSERT INTO escuderias (equipos, description, puntos_equipo, pos_equipos) VALUE (?, ?, ?, ?)");
        $query->execute([$equipos, $description , $puntos_equipo, $pos_equipos]);

        return $this->db->lastInsertId();
    }

    function delete($id){
        $query = $this->db->prepare('DELETE FROM escuderia WHERE id = ?');
        $query->execute([$id]);
    }
    
    function edit($id, $equipos, $description , $puntos_equipo, $pos_equipos){
        $query = $this->db->prepare('UPDATE `escuderia` SET nombre= ? , campeonato = ?, puntos = ?, id_escuderia = ? WHERE id = ?');
        $query->execute([$id, $equipos, $description , $puntos_equipo, $pos_equipos]);
        return $this->db->lastInsertId();
    }


}