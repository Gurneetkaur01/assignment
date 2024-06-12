<?php
include 'config.php';

$name = $_POST['name'];
$hours = $_POST['hours'];
$position = $_POST['position'];

$sql = "INSERT INTO employees (name, hours, position) VALUES ('$name', '$hours', '$position')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
header('Location: view.php');
?>
