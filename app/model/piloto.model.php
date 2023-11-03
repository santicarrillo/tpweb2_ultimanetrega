<?php

class PilotoModel {

    private $db;

    //Abro la conexion
    function __construct(){
        $this->db = new PDO('mysql:host='. DB_HOST .';dbname='.DB_NAME .';charset='.DB_Charset,  DB_USER, DB_PASS);
    }
<<<<<<< HEAD

=======
 
>>>>>>> 6ca30cac1570a1f499dea97e9b9dcb7bd20c678d
    //Devuelve la cantidad total de registros de la tabla de la bbdd
    function count(){
        $query = $this->db->prepare("SELECT count(*) FROM products");
        $query->execute();
        $total = $query->fetchColumn();
        return $total;
<<<<<<< HEAD
=======
    }
    //Orden y paginacion
    function getAll($limit, $offset, $sort, $order){
        $query = $this->db->prepare("SELECT * FROM products ORDER BY $sort $order LIMIT $offset, $limit");
        $query->execute();
        
        $products = $query->fetchAll(PDO::FETCH_OBJ); // devuelve un arreglo de productos
        
        return $products;
>>>>>>> 6ca30cac1570a1f499dea97e9b9dcb7bd20c678d
    }
    //filtro
    function getAllFilter($field, $value, $limit, $offset, $sort, $order){
        $query = $this->db->prepare("SELECT * FROM pilotos WHERE $field = $value ORDER BY $sort $order LIMIT $offset, $limit");
        $query->execute();

        $pilotos = $query->fetchAll(PDO::FETCH_OBJ); 

        return $pilotos;
    }
<<<<<<< HEAD

    //Orden y paginacion
    function getAll($limit, $offset, $sort, $order){
        $query = $this->db->prepare("SELECT * FROM products ORDER BY $sort $order LIMIT $offset, $limit");
        $query->execute();
        
        $products = $query->fetchAll(PDO::FETCH_OBJ); // devuelve un arreglo de productos
        
        return $products;
    }

=======
   
>>>>>>> 6ca30cac1570a1f499dea97e9b9dcb7bd20c678d
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

    function delete($id){
        $query = $this->db->prepare('DELETE FROM pilotos WHERE id = ?');
        $query->execute([$id]);
    }
    
    function edit($id, $nombre, $campeonato, $puntos, $id_escuderia){
        $query = $this->db->prepare('UPDATE `pilotos` SET nombre= ? , campeonato = ?, puntos = ?, id_escuderia = ? WHERE id = ?');
        $query->execute([$id, $nombre,  $campeonato, $puntos, $id_escuderia]);
        return $this->db->lastInsertId();
    }

    function edit($id, $nombre, $campeonato, $puntos, $id_escuderia){
        $query = $this->db->prepare('UPDATE `pilotos` SET nombre= ? , campeonato = ?, puntos = ?, id_escuderia = ? WHERE id = ?');
        $query->execute([$id, $nombre,  $campeonato, $puntos, $id_escuderia]);
        return $this->db->lastInsertId();
    }

}