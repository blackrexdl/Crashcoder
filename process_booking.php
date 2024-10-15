<?php
// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "register";  // Replace with your actual database name

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $destination = $_POST['destination'];
    $check_in = $_POST['check_in'];
    $check_out = $_POST['check_out'];
    $children = $_POST['children'];
    $adults = $_POST['adults'];
    $rooms = $_POST['rooms'];

    // Prevent SQL Injection
    $destination = $conn->real_escape_string($destination);
    $check_in = $conn->real_escape_string($check_in);
    $check_out = $conn->real_escape_string($check_out);
    $children = $conn->real_escape_string($children);
    $adults = $conn->real_escape_string($adults);
    $rooms = $conn->real_escape_string($rooms);

    // Insert the booking data into the bookings table
    $sql = "INSERT INTO bookings (destination, check_in, check_out, children, adults, rooms) VALUES ('$destination', '$check_in', '$check_out', '$children', '$adults', '$rooms')";
    
    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Booking successful!');</script>";
        echo "<script>window.location.href = 'index.php';</script>";  // Redirect back to the booking form
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>