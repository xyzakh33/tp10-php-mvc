<!DOCTYPE html>
<html>
<head>
    <title>To-Do List</title>
</head>
<body>
    <h1>To-Do List</h1>
    <a href="index.php?action=add">Add Task</a>
    <ul>
        <?php foreach ($tasks as $task): ?>
            <li>
                <?= htmlspecialchars($task['title']) ?>
                <a href="index.php?action=delete&id=<?= $task['id'] ?>">Delete</a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
