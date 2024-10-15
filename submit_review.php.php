<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "register";  // Replace with your database name

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle the form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $rating = $_POST['rating'];
    $reviewText = $_POST['reviewText'];
    
    // Handle file uploads
    $photo = null;
    $video = null;

    // Check and move photo upload
    if (isset($_FILES['photo']) && $_FILES['photo']['error'] == UPLOAD_ERR_OK) {
        $photo = 'uploads/photos/' . basename($_FILES['photo']['name']);
        move_uploaded_file($_FILES['photo']['tmp_name'], $photo);
    }

    // Check and move video upload
    if (isset($_FILES['video']) && $_FILES['video']['error'] == UPLOAD_ERR_OK) {
        $video = 'uploads/videos/' . basename($_FILES['video']['name']);
        move_uploaded_file($_FILES['video']['tmp_name'], $video);
    }

    // Prevent SQL Injection
    $name = $conn->real_escape_string($name);
    $reviewText = $conn->real_escape_string($reviewText);

    // Insert the review into the database
    $sql = "INSERT INTO reviews (name, rating, reviewText, photo, video) VALUES ('$name', $rating, '$reviewText', '$photo', '$video')";

    if ($conn->query($sql) === TRUE) {
        // Popup message for successful submission
        echo "<script>
                alert('Thank you for your review!');
                setTimeout(function() {
                    window.location.href = 'index.php'; // Redirect after 1 second
                }, 1000);
              </script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>