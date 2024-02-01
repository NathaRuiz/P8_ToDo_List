<?php

namespace App\Controllers;

use App\Models\TaskModel;
use App\Models\DatabaseConnection;
use Exception;

class TaskController
{
    private $taskModel;

    public function __construct(DatabaseConnection $db)
    {
        $this->taskModel = new TaskModel($db);
    }

    public function index()
    {
        // Implementa la lógica para mostrar la lista de libros
        $tasks = $this->taskModel->getAllTasks();
        include_once __DIR__ . '/../views/index.php';
    }

    public function create()
    {
        // Implementa la lógica para mostrar el formulario de creación de libros
        include_once __DIR__ . '/../views/create.php';
    }

    public function store($data)
    {
        try {
            $result = $this->taskModel->createTask($data);

            return $result;
        } catch (Exception $e) {
            // Manejar la excepción de una manera significativa para tu aplicación
            echo $e->getMessage();
        }
    }

    // Implementa otros métodos según sea necesario
}
 