<?php

use App\Controllers\TaskController;
use App\Models\DatabaseConnection;

require_once __DIR__ . '/vendor/autoload.php';

// Incluyo el archivo de configuración que tiene los datos de mi bd
require_once __DIR__ . '/config.php';

// Inicialización de la conexión a la base de datos
$db = new DatabaseConnection(DB_HOST, DB_NAME, DB_USER, DB_PASS);
$db->connect();

// Inicialización del controlador
$controller = new TaskController($db);

// Manejo de acciones según la solicitud del usuario
$action = $_GET['action'] ?? 'index';

switch ($action) {
    case 'index':
        $tasks = $controller->index();
        break;

    case 'create':
        $controller->create();
        break;

    case 'store':
        $data = $_POST;
        $controller->store($data);
        $tasks = $controller->index(); // Recargar las tareas después de crear una nueva
        break;
        

    default:
        // redirigir a la página principal en caso de error
        header("Location: index.php?action=index");
        exit;
}
