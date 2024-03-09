<?php
include 'db_connection.php';

$sql = "SELECT * FROM tasks";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<li>" . $row['taskname'] . " - " . $row['date'] . " - " . $row['status'] . " <a href='update.php?id=" . $row['id'] . "'>Edit</a> <a href='delete_task.php?id=" . $row['id'] . "'>Delete</a></li>";
    }
} else {
    echo "No tasks found";
}

$conn->close();
?>