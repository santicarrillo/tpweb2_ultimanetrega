<?php

class PilotoModel {
    private $db;

    function __construct() {
        $this->db = new PDO('mysql:host=localhost;dbname=formula1;charset=utf8', 'root', '');
    }

    /**
     * Obtiene y devuelve de la base de datos todas las tareas.
     */
    function getPilotos() {
        $query = $this->db->prepare('SELECT * FROM pilotos');
        $query->execute();

        // $tasks es un arreglo de tareas
        $pilotos = $query->fetchAll(PDO::FETCH_OBJ);

        return $pilotos;
    }

    /**
     * Inserta la tarea en la base de datos
     */
    function insertPiloto($nombre, $campeonato, $puntos) {
        $query = $this->db->prepare('INSERT INTO pilotos (nombre, campeonato, puntos) VALUES(?,?,?)');
        $query->execute([$nombre, $campeonato, $puntos]);

        return $this->db->lastInsertId();
    }

    
function deletePiloto($id) {
    $query = $this->db->prepare('DELETE FROM pilotos WHERE id = ?');
    $query->execute([$id]);
}

function updatePiloto($id) {    
    $query = $this->db->prepare('UPDATE pilotos WHERE id = ?');
    $query->execute([$id]);
}

function editPiloto($id, $nombre, $campeonato, $puntos){
    $editpiloto = $this->db->prepare("UPDATE piloto SET nombre = ?, campeonato = ?, puntos = ? WHERE id=?");
    $editpiloto->execute([$nombre, $campeonato, $puntos, $id]); //nombre-de-la-columna = valor[, nombre-de-la-columna=valor]   
    return $editpiloto;
}

public function getAllPilotos() {
    // 1. abro conexión a la DB
    // ya esta abierta por el constructor de la clase

    // 2. ejecuto la sentencia (2 subpasos)
    $query = $this->db->prepare("SELECT * FROM pilotos");
    $query->execute();

    // 3. obtengo los resultados
    $pilotos = $query->fetchAll(PDO::FETCH_OBJ); // devuelve un arreglo de objetos
    
    return $pilotos;
}

}