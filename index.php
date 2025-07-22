<?php
// Cargar configuración general
require_once 'config/config.php';

// Obtener nombre del controlador desde GET o usar "HomeController" por defecto
$controllerName = isset($_GET['controller']) ? ucfirst($_GET['controller']) . 'Controller' : 'HomeController';
$action         = $_GET['action'] ?? 'index';

// Ruta completa al archivo del controlador
$controllerFile = "controllers/$controllerName.php";

// Verificar si el archivo del controlador existe
if (file_exists($controllerFile)) {
    require_once $controllerFile;

    // Verificar si la clase del controlador existe
    if (class_exists($controllerName)) {
        $controllerObj = new $controllerName();

        // Verificar si el método existe en la clase
        if (method_exists($controllerObj, $action)) {
            $controllerObj->$action(); // Ejecutar acción
        } else {
            // Acción no encontrada
            require_once 'views/404.php';
        }
    } else {
        // Clase del controlador no encontrada
        require_once 'views/404.php';
    }
} else {
    // Archivo del controlador no encontrado
    require_once 'views/404.php';
}
