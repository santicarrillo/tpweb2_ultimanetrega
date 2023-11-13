<?php
require_once 'app/model/config.php';
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
    //Orden y paginacion
    function getAll($limit, $offset, $sort, $order){
        $query = $this->db->prepare("SELECT * FROM escuderias ORDER BY $sort $order LIMIT $offset, $limit");
        $query->execute();
        
        $escuderias = $query->fetchAll(PDO::FETCH_OBJ); // devuelve un arreglo de productos
        
        return $escuderias;
    }

    //Orden, paginacion y filtro 
    function getAllFilter($field, $value, $limit, $offset, $sort, $order){
        $query = $this->db->prepare("SELECT * FROM escuderias WHERE $field = $value ORDER BY $sort $order LIMIT $offset, $limit");
        $query->execute();

        $escuderias = $query->fetchAll(PDO::FETCH_OBJ); 

        return $escuderias;
    }
    //Orden, paginacion y filtro 
    function getAllFilterPuntos($field, $value, $limit, $offset, $sort, $order){
        $query = $this->db->prepare("SELECT * FROM escuderias WHERE $field <= ?  ORDER BY $sort $order LIMIT $offset, $limit");
        $query->execute([$value]);
        
        $escuderias = $query->fetchAll(PDO::FETCH_OBJ); // devuelve un arreglo de productos
        
        return $escuderias;
    }



    function get($id){
        $query = $this->db->prepare('SELECT * FROM escuderias WHERE id = ?');
        $query->execute([$id]);
        $escuderia = $query->fetch(PDO::FETCH_OBJ);

        return $escuderia;
    }

    function insert($equipos, $puntos_equipo, $pos_equipos){
        $query = $this->db->prepare("INSERT INTO escuderias (equipos, puntos_equipo, pos_equipos) VALUE (?, ?, ?)");
        $query->execute([$equipos , $puntos_equipo, $pos_equipos]);

        return $this->db->lastInsertId();
    }

    function delete($id){
        $query = $this->db->prepare('DELETE FROM escuderias WHERE id = ?');
        $query->execute([$id]);
    }
    
    function edit($id, $equipos, $description , $puntos_equipo, $pos_equipos){
        $query = $this->db->prepare('UPDATE `escuderias` SET nombre= ? , campeonato = ?, puntos = ?, id_escuderia = ? WHERE id = ?');
        $query->execute([$id, $equipos, $description , $puntos_equipo, $pos_equipos]);
        return $this->db->lastInsertId();
    }


}