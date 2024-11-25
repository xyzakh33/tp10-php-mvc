<?php
// controllers/TaskController.php
require_once 'models/Task.php';

class TaskController
{
    public function index()
    {
        $tasks = Task::getAll();
        require 'views/List.php';
    }

    public function add()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $title = $_POST['title'] ?? '';
            if ($title) {
                Task::add($title);
                header('Location: index.php');
                exit();
            }
        }
        require 'views/add.php';
    }

    public function delete()
    {
        $id = $_GET['id'] ?? null;
        if ($id) {
            Task::delete($id);
            header('Location: index.php');
            exit();
        }
    }
}
?>
