<?php
require_once 'models/Juego.php';

class JuegosController {
    public function index() {
        $juegos = Juego::getAll();
        require_once 'views/layout/header.php';
        require_once 'views/juegos.php';
        require_once 'views/layout/footer.php';
    }

    public function agregar() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nombre = $_POST['nombre'];
            $plataforma = $_POST['plataforma'];
            $tipo = $_POST['tipo'];
            Juego::insert($nombre, $plataforma, $tipo);
            header("Location: index.php?controller=Juegos&action=index");
        } else {
            require_once 'views/layout/header.php';
            require_once 'views/agregar.php';
            require_once 'views/layout/footer.php';
        }
    }
}
