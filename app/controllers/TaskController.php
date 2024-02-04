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

    public function store()
    {
        $data = $_POST;
        $result = $this->taskModel->createTask($data);
        return $result;
    }

    public function edit()
    {
        $id = $_GET['id'];
        $task = $this->taskModel->getTaskById($id);
        include_once __DIR__ . '/../views/edit.php';
    }

    public function delete()
    {
        $id = $_GET['id'];
        $result = $this->taskModel->deleteTask($id);
        return $result;
    }

    public function update()
    {
        $id = $_GET['id'];
        $data = $_POST;
        $result = $this->taskModel->updateTask($id, $data);
        return $result;
    }

    public function show()
    {
        $id = $_GET['id'];
        $task = $this->taskModel->getTaskById($id);
        include_once __DIR__ . '/../views/show.php';
    }

    public function filter()
    {
        $filter = $_POST['filter'] ?? '';

        if ($filter === 'Por Hacer') {
            $tasks = $this->taskModel->getFilteredTasks($filter, true);
        } elseif (!empty($filter)) {
            $tasks = $this->taskModel->getFilteredTasks($filter,false);
        } else {
            $tasks = $this->taskModel->getAllTasks();
        }

        include_once __DIR__ . '/../views/index.php';
    }
}
