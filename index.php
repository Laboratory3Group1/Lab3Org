<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>Task management</title>
    <link rel="stylesheet" href="style.css">
<body>
        <h1>Task Management</h1>
        
        <h2>Add Task</h2>
        <form action="add_task.php" method="POST">
            <input type="text" name="task_name" placeholder="Task Name" required>
            <input type="date" name="task_date" required>
            <select name="task_status">
                <option value="Not Done">Not Done</option>
                <option value="Done">Done</option>
            </select>
            <button type="submit">Add Task</button>
        </form>
        
    <h2>Tasks</h2>
    <ul>
        <?php

         include 'display_task.php'; 
         
         ?>

    </ul>

</body>
</html>