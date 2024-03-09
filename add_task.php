<?php
include 'db_connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $task_name = $_POST['task_name'];
    $task_date = $_POST['task_date'];
    $task_status = $_POST['task_status'];

    $sql = "INSERT INTO tasks (taskname, date, status) VALUES ('$task_name', '$task_date', '$task_status')";

    if ($conn->query($sql) === TRUE) {
        echo "New task added successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
    header("Location: index.php");
}
?>
