<?php
include 'db_connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $task_id = $_GET['id'];
    $task_name = $_POST['taskname'];
    $task_date = $_POST['date'];
    $task_status = $_POST['status'];

    $sql = "UPDATE tasks SET taskname='$task_name', date='$task_date', status='$task_status' WHERE id=$task_id";

    if ($conn->query($sql) === TRUE) {
        echo "Task updated successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
    header("Location: index.php");
}
