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
        $tasks = $this->taskModel->getAllTasks();
        include_once __DIR__ . '/../views/index.php';
    }

    public function create()
    {
        include_once __DIR__ . '/../views/create.php';
    }

    public function store($data)
    {
        try {
            $result = $this->taskModel->createTask($data);
            return $result;

        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    public function edit($id){
        $task = $this->taskModel->getTaskById($id);
        include_once __DIR__ . '/../views/edit.php';
    }

    public function delete(){
        $id = $_GET['id'];
        $result = $this->taskModel->deleteTask($id);
        return $result;
    }

}
 