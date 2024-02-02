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
        try {
            $query = "SELECT * FROM tasks";
            $statement = $this->db->get_connection()->query($query);
            $result = $statement->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        } catch (Exception $e) {
            throw new Exception("Error al obtener todas las tareas: " . $e->getMessage());
        }
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
  
    public function getTaskById($id){
        try {
            $query = "SELECT * FROM tasks WHERE id_task = ?";
            $statement = $this->db->get_connection()->prepare($query);
            $statement->execute([$id]);
            $result = $statement->fetch(PDO::FETCH_ASSOC);
            return $result;
        } catch (Exception $e) {
            throw new Exception("Error al obtener la tarea por ID: " . $e->getMessage());
        }
    }
    
    public function deleteTask($id){ 
        try {
            $query = "DELETE FROM tasks WHERE id_task = :id";
            $statement = $this->db->get_connection()->prepare($query);
            $result = $statement->execute([':id' => $id]);
            return $result;
        } catch (Exception $e) {
            throw new Exception("Error al eliminar la tarea: " . $e->getMessage());
        }
    }


}
