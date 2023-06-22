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
        <a href="#home" class="active">Home</a>
        <a href="ride.html">Publish a ride</a>
        <a href="#about">About</a>
        <a href="#contact">Contact</a>

        <!-- logout code -->
<?php
session_start();

// Clear all session variables
$_SESSION = array();

// Destroy the session
session_destroy();

// Redirect to the login page or any other page
header("Location: login.html");
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


<?php
exit();
?>
