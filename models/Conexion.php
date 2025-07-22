<?php
class Conexion {
    public static function getConexion() {
        return new PDO("mysql:host=localhost;dbname=catalogo_juegos;charset=utf8", "root", "");
    }
}
