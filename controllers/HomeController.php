<?php
class HomeController {
    public function index() {
        require_once 'views/layout/header.php';
        require_once 'views/home.php';
        require_once 'views/layout/footer.php';
    }
}
