<?php
include('config.php');
    // Get data for a specific ID from the database
    $id = $_GET['id'];

    // Implement your database connection logic here

    $sql = "SELECT  exam, quiz, exam_from, exam_to, result_pub, time_duration, attempt,percentage, description FROM examonline WHERE id = $id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        echo json_encode($row);
    } else {
        echo "0 results";
    }

    $conn->close();
?>
