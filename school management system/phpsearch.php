<?php
include('config.php');

// if ($conn->connect_error) {
//     die("Connection failed: " . $mysqli->connect_error);
// }

// Get the search term from the form submission
$searchTerm = $_POST['search'];


$query = "SELECT * FROM attendencestudent WHERE id   LIKE '%$searchTerm%'";
$result = $conn->query($query);

if ($result) {
    // Display the search results
    while ($row = $result->fetch_assoc()) {
        // Output the data as needed
        echo "Student ID: " . $row['id'] . "<br>";  
        echo "student Name: " . $row['name'] . "<br>";
        echo "Attendence Time: " . $row['time'] . "<br>";
        echo "Attendence Select: " . $row['select'] . "<br>";
        // Add more fields as needed
        echo "<br>";
    }
} else {
    echo "No results found.";
}


// Close the database connection
// $mysqli->close();
?>