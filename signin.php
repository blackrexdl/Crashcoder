<?php
// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "signup";  // Replace with your database name

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Prevent SQL Injection
    $email = $conn->real_escape_string($email);
    $password = $conn->real_escape_string($password);

    // Check if the user exists
    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // User exists, now check the password
        $user = $result->fetch_assoc();
        if ($user['password'] == $password) {
            echo "<script>alert('Login successful!');</script>";
            echo "<script>window.location.href = 'index.php';</script>";  // Redirect to index.php after login
        } else {
            echo "Incorrect password!";
        }
    } else {
        // User does not exist, show a notification and redirect to registration page
        echo "<script>alert('User not registered! Redirecting to registration page.');</script>";
        echo "<script>window.location.href = 'index.php';</script>";  // Redirect to register page
    }
}

$conn->close();
?>