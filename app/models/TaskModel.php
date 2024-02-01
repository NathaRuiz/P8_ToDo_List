<?php

namespace App\Models;

use PDO;
use Exception;

class TaskModel {
    private $db;

    public function __construct(DatabaseConnection $db) {
        $this->db = $db;
    }

    public function getAllTasks() {
        $query = "SELECT * FROM tasks";
        $statement = $this->db->get_connection()->query($query);

        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    public function createTask($data) {
        $query = "INSERT INTO tasks (title, task_description, task_state) VALUES (?, ?, ?)";
        $statement = $this->db->get_connection()->prepare($query);

        $title = $data['title'];
        $description = $data['task_description'];
        $state = $data['task_state'];

        try {
            $result = $statement->execute([$title, $description, $state]);
            return $result;
        } catch (Exception $e) {
            throw new Exception("Error al crear la tarea: " . $e->getMessage());
        }

        
    }

    // Agrega otros métodos según sea necesario, como show, edit, update, delete, etc.
}
