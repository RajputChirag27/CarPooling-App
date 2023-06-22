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

// Signup process
if (isset($_POST['signup'])) {
    $email = $_POST['email'];
    $pass = $_POST['password'];



    // Check if the username is already taken
    $check_query = "SELECT * FROM users WHERE email = '$email'";
    $result = $conn->query($check_query);

    if ($result->num_rows > 0) {
        echo "Already Login with this email.";
    } else {
        // Insert the new user into the database
        $insert_query = "INSERT INTO users (email, pass) VALUES ('$email', '$pass')";
        if ($conn->query($insert_query) === true) {
            echo "Signup successful. You can now <a href='login.html'>login</a> with your credentials.";
        } else {
            echo "Error: " . $insert_query . "<br>" . $conn->error;
        }
    }
}


$conn->close();
?>

