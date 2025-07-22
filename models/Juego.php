<?php
require_once 'models/Conexion.php';

class Juego {
    public static function getAll() {
        $db = Conexion::getConexion();
        $stmt = $db->query("SELECT * FROM juegos");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function insert($nombre, $plataforma, $tipo) {
        $db = Conexion::getConexion();
        $stmt = $db->prepare("INSERT INTO juegos (nombre, plataforma, tipo) VALUES (?, ?, ?)");
        $stmt->execute([$nombre, $plataforma, $tipo]);
    }
}
