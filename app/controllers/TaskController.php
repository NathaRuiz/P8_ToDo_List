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
        include_once '../views/index.php';
    }

    public function create()
    {
        // Implementa la lógica para mostrar el formulario de creación de libros
        include_once '../views/create.php';
    }

    public function store($data)
    {
        try {
            $result = $this->taskModel->createTask($data);

            if ($result) {
                $response = "Se ha registrado con éxito la tarea {$data['title']} en la base de datos";
                return $response;
            } else {
                throw new Exception("Error en el registro, vuelve a intentarlo");
            }
        } catch (Exception $e) {
            // Manejar la excepción de una manera significativa para tu aplicación
            echo $e->getMessage();
        }
    }

    // Implementa otros métodos según sea necesario
}
 