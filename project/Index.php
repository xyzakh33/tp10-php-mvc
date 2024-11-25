<?php
// index.php
require_once 'controllers/TaskController.php';

$action = $_GET['action'] ?? 'index';
$controller = new TaskController();

if (method_exists($controller, $action)) {
    $controller->$action();
} else {
    http_response_code(404);
    echo "Page not found!";
}
?>
