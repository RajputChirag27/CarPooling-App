<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title>Car Pooling System</title>
</head>
<body>
<header class="header">
    <nav class="topnav" id="myTopnav">
        <a href="#home" class="active">Search Ride</a>
        <a href="ride.html">Publish a ride</a>
        <a href="#about">About</a>
        <a href="#contact">Contact</a>
        </header>
<?php
$date = $_POST['date'];
$leaving = $_POST['Leaving'];
$going = $_POST['Going'];
$seat = $_POST['seat'];

$servername = "localhost";
$username = "root"; 
$password = "chirag"; 
$dbname = "carpooling"; 

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

session_start();
if(isset($_SESSION['email'])){


// Connection successful
$sql = "SELECT * FROM ride WHERE leaving = '$leaving' AND going = '$going' AND date = '$date' AND seat >= '$seat'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Create a table to display the results
    echo "<table class='php-container'>";
    echo "<tr><th>ID</th><th>Leaving From</th><th>Going to</th><th>Date of Leaving</th><th>Available Seats</th><th>Book Ride</th></tr>";

    // Loop through the result set and display each row in a table row
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["leaving"] . "</td>";
        echo "<td>" . $row["going"] . "</td>";
        echo "<td>" . $row["date"] . "</td>";
        echo "<td>" . $row["seat"] . "</td>";
        // echo "<td><a href='bookRide.php?id=" . $row["id"]."'>Book</a></td>";
        echo "<td> <form method='post' action='bookRide.php'> 
        <input type='hidden' name='param' value='".$row["seat"]."'>
        <input type='hidden' name='id' value='".$row["id"]."'>
        <input type='hidden' name='seat' value='".$seat."'>
        <input type='submit' value='Book'>
        </form></td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "No results found.";
}
}
else{
    echo "Please Login First!! <br> <a href='login.html'>Login</a>";
}


$conn->close();

?>

<footer>
  <div class="footer">
    <div class="contain">
    <div class="col">
      <h1>Company</h1>
      <ul>
        <li>About</li>
        <li>Mission</li>
        <li>Services</li>
        <li>Social</li>
      </ul>
    </div>
    <!-- <div class="col">
      <h1>Products</h1>
      <ul>
        <li>About</li>
        <li>Mission</li>
        <li>Services</li>
        <li>Social</li>
      </ul>
    </div>
    <div class="col">
      <h1>Accounts</h1>
      <ul>
        <li>About</li>
        <li>Mission</li>
        <li>Services</li>
        <li>Social</li>
      </ul>
    </div> -->
    <div class="col">
      <h1>Resources</h1>
      <ul>
        <li>Webmail</li>
        <li>Redeem code</li>
        <li>Site map</li>
      </ul>
    </div>
    <div class="col">
      <h1>Support</h1>
      <ul>
        <li>Contact us</li>
        <li>Web chat</li>
        <li>Open ticket</li>
      </ul>
    </div>
    <div class="col social">
      <h1>Social</h1>
      <ul>
        <li><img src="https://www.pinclipart.com/picdir/big/491-4914404_facebook-icon-icon-design-blue-icon-png-and.png" width="32" style="width: 32px;"></li>
        <li><img src="https://www.pinclipart.com/picdir/big/1-13590_instagram-logo-insta-logo-png-transparent-background-clipart.png" width="32" style="width: 32px;"></li>
        <li><img src="https://www.pinclipart.com/picdir/big/415-4151952_facebook-twitter-instagram-icon-wwwpixsharkcom-linkedin-sign-for.png" style="width: 32px;"></li>
      </ul>
    </div>
  <div class="clearfix"></div>
  </div>
  </div>
</footer>
</body>
<script src="script.js"></script>
</html>