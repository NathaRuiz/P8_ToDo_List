<?php

use App\Controllers\TaskController;
use App\Models\DatabaseConnection;

require_once __DIR__ . '/vendor/autoload.php';

// Configuración de la base de datos
$server = "127.0.0.1";
$database = "p8_todo_list";
$username = "root";
$password = "basededatos";

// Inicialización de la conexión a la base de datos
$db = new DatabaseConnection($server, $database, $username, $password);
$db->connect();

// Inicialización del controlador
$controller = new TaskController($db);

// Manejo de acciones según la solicitud del usuario
$action = $_GET['action'] ?? 'index';

switch ($action) {
    case 'index':
        $tasks = $controller->index();
        include_once __DIR__ . '/app/views/index.php';
        break;

    case 'create':
        $controller->create();
        break;

    case 'store':
        // Asegúrate de validar y limpiar los datos antes de pasarlos al controlador
        $data = $_POST;
        $controller->store($data);
        $tasks = $controller->index(); // Recargar las tareas después de crear una nueva
        include_once __DIR__ . '/app/views/index.php';
        break;
        

    default:
        // Mostrar una página de error o redirigir a la página principal
        header("Location: index.php?action=index");
        exit;
}
