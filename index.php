<!-- <?php
//INSERT INTO `tasks` (`id_task`, `title`, `description`, `completed`) VALUES (NULL, 'Crear Tarea', 'Los usuarios PODRÁN agregar nuevas tareas a la lista, proporcionando un título y una descripción.', '0');
include("./views/layouts/header.php");
?>

Bienvenido

<?php include("./views/layouts/footer.php"); ?> -->

<?php

use App\Controllers\TaskController;
use App\Models\DatabaseConnection;

require_once __DIR__ . '/../vendor/autoload.php';

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
        include_once '../views/index.php';
        break;

    case 'create':
        $controller->create();
        break;

    case 'store':
        // Asegúrate de validar y limpiar los datos antes de pasarlos al controlador
        $data = $_POST;
        $controller->store($data);
        break;

    // Agregar otros casos según las acciones disponibles

    default:
        // Manejar acciones desconocidas o mostrar una página de error
        echo "Acción no válida";
        break;
}
