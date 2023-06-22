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
        </header>
        <?php
        session_start();
if(isset($_SESSION['email']))
    echo "<a href='logout.php'>Logout</a>";
else
       echo "<a href='login.html'>Login</a>"        
        ?>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
          <i class="fa fa-bars"></i>
        </a>
      </nav>      

<div class="container">
  <?php
  if(isset($_SESSION['email'])){
  $data = $_SESSION['email'];
  $str = "";
  if(isset($_SESSION['email'])){
  for($i=0; $i<strlen($data); $i++)
  {
    if($data[$i]=='@'){
    $str = substr($data,0,$i);
      break;
    }
  }
}
    echo '<h1 class="primary-heading">Welcome '.$str.', Your pick of rides at low prices</h1>';}
    else 
  echo '<h1 class="primary-heading">Welcome Guest! Please Login</h1>';
  ?>
    <div class="form-container">
      <form action="searchRide.php" method="post">
        <select name="Leaving" id="Leaving" placeholder="Leaving from...." required >
          <option value="Leaving from....">Leaving from....</option>
          <option value="Vadodara">Vadodara</option>
          <option value="Ahmedabad">Ahmedabad</option>
          <option value="Surat">Surat</option>
          <option value="Dahod">Dahod</option>
        </select>
        <select name="Going" id="Going" placeholder="Going to...." required>
          <option value="Going to....">Going to...</option>
          <option value="Vadodara">Vadodara</option>
          <option value="Ahmedabad">Ahmedabad</option>
          <option value="Surat">Surat</option>
          <option value="Dahod">Dahod</option>
        </select>
        <input type="date" name="date" id="datePicker" placeholder="Date"  required>
        <input type="number" name="seat" placeholder="No. of seats" min="1" max="6" required>
        <input type="submit" name="number" value="Search"  required>
      </form>
    </div>
</div>
<div class="content-container">
  <div class="content-box">
    <p>
      <strong>Your pick of rides at low prices</strong><br><br>
  No matter where you're going, by bus or carpool, find the perfect ride from our wide range of destinations and routes at low prices.
    </p>
  </div>

<div class="content-box">
  <p>
    <strong>Trust who you travel with</strong><br><br> 
    We take the time to get to know each of our members and bus partners. We check reviews, profiles and IDs, so you know who you're travelling with and can book your ride at ease on our secure platform.
  </p>
</div>

<div class="content-box">
  <strong>Scroll, click, tap and go!</strong> <br><br>
  <p>
    Booking a ride has never been easier! Thanks to our simple app powered by great technology, you can book a ride close to you in just minutes.
  </p>
</div>
</div>

</div>

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
