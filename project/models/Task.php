<?php
// models/Task.php
require_once 'db.php';

class Task
{
    public static function getAll()
    {
        global $pdo;
        $stmt = $pdo->prepare("SELECT * FROM tasks");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function add($title)
    {
        global $pdo;
        $stmt = $pdo->prepare("INSERT INTO tasks (title) VALUES (:title)");
        $stmt->execute(['title' => $title]);
    }

    public static function delete($id)
    {
        global $pdo;
        $stmt = $pdo->prepare("DELETE FROM tasks WHERE id = :id");
        $stmt->execute(['id' => $id]);
    }
}
?>
