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

    // Check if the email is already registered
    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<script>alert('Email is already registered!');</script>";
        echo "<script>window.location.href = 'signin.php';</script>";  // Redirect to sign-in page
    } else {
        // Register the user
        $sql = "INSERT INTO users (email, password) VALUES ('$email', '$password')";
        if ($conn->query($sql) === TRUE) {
            echo "<script>
                    alert('Successfully registered! Redirecting to login page...');
                    setTimeout(function() {
                        window.location.href = 'index.php';
                    }, 1000);  // Redirect after 1 second
                  </script>";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}

$conn->close();
?>