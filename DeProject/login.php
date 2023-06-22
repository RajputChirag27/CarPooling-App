<?php
session_start();

// Database connection details
$servername = "localhost";
$username = "root";
$password = "chirag";
$dbname = "carpooling";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Retrieve the user from the database
    $query = "SELECT * FROM users WHERE email = '$email' AND pass = '$password'";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        // Login successful, set session variables
        $_SESSION['email'] = $email;
        // You can redirect to another page using header() function
        header("Location: index.php");
    } else {
        echo "Invalid username or password.";
    }
}


$conn->close();
exit();
?>
