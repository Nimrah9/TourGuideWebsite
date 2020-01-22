<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
body {margin:0;}

.icon-bar {
  width: 100%;
  background-color: green;
  overflow: auto;
}

.icon-bar a {
  float: left;
  width: 32%;
  text-align: center;
  padding: 12px 0;
  transition: all 0.3s ease;
  color: white;
  font-size: 36px;
}

.icon-bar a:hover {
  background-color: #000;
}

.active {
  background-color: white;
}

body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: #E5FFCC;
}

* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  padding: 16px;
}

/* Full-width input fields */
input[type=text], input[type=password], input[type=email]{
  width: 60%;
  padding: 15px;
  margin: 5px  270px ;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus, input[type=email]:focus{
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  margin: 5px 270px;
  border: none;
  cursor: pointer;
  width: 60%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}


</style>
</head>

<body bgcolor="E5FFCC">
<h2 align="left" style="color:#006600;font-size:120px;font-family:Impact, sans-serif;"><i> ENROUTE PAKISTAN</i></h2>
<p align="right" style="color:black;font-size:30px;font-family:Impact;">Get ready to embark with us on this beautiful journey!</p>

<div class="icon-bar">
  <a  href="homepage.php"><i class="fa fa-home">Home</i></a> 
  <a  href="3.php"><i class="fa fa-search">Packages</i></a> 
  <a href="#"><i class="fa fa-envelope">About Us</i></a> 

</div>
<br>
<h2 align="left" style="color:black;font-size:60px;font-family:Impact;"> What is "Enroute Pakistan"?</h2>
<br>
<p font-family:"Cambria" align="center" style="font-size:30px"> Enroute Pakistan provides private tours for travelers through our carefully selected network of local tour guides, each of whom is keen to share their knowledge, experience and expertise. The travelers we serve want to do unique things, experience the reality of a place and see its culture through the eyes of a local person. They are 'sensibly curious', socially conscious and value seeing their travel spending directly benefit the people who live in the communities they visit.</p>

<p font-family:"Cambria" align="center" style="font-size:30px">We are the 'merchant of record' for each tour sold and handle marketing, booking and payment processing, customer service and payments. Enroute Pakistan website offers many tours that can be purchased 'off the shelf', however each can be customized to fit a traveler's specific needs. Our mission is to provide high quality private tours everywhere people travel. We work every day towards that goal.</p>

<br>
<br>

<h2 align="left" style="color:black;font-size:60px;font-family:Impact;"> Why "Enroute Pakistan"?</h2>
<br>
<p font-family:"Cambria" align="center" style="font-size:30px"> Our guides are entrepreneurial, passionate people proud of the places they live. Through them, we are able to offer a variety of tours, including 'off the beaten track' tours that reflect local culture and a diversity of traveler interests. We're committed to helping our guide-partners be successful participants in the tourism industry. To do so, we actively search out and qualify new tour guides, train them to work with our system and business principles, and collaborate with them to develop unique tour offerings. </p>
<p font-family:"Cambria" align="center" style="font-size:30px">We showcase the personality and skill of each guide while providing for consistent elements between tour offerings - pricing is per tour, not per person, payment in advance and other standardized policies. We have a dedicated team working from our offices in Karachi, Lahore and Northern Areas. They are on hand 24/7 to help, in case problems arise.
</p>
<br>
<br>

<h2 align="left" style="color:black;font-size:60px;font-family:Impact;"> Contact "Enroute Pakistan"</h2>
<p font-family:"Cambria" align="center" style="font-size:30px">
Address: Office No 00, Area xy, Block 23, Karachi, Pakistan.<br>
Phone: 922199261564-2<br>
Email: <u style="color:blue">info@enroutepakistan.org</u><br>
Facebook:<u style="color:blue"> www.facebook.com/enroute.pakistan.23</u>
</p>
<br>


<h2 align="left" style="color:black;font-size:60px;font-family:Impact;">Employee Registration </h2>
<p font-family:"Cambria" align="center" style="font-size:30px">Are you interested in travelling? Can you give out tours to diverse tourist? Are you interested in planning out and pulling off tours all across the country. Become a part of Enroute Pkaistan today</p>

<form action="applicant.php" method="post">
  <div class="container">
    <h1 style="margin:5px 270px">Register</h1>
    <p style="margin:5px 270px">Please fill in this form to create an account.</p>
    <hr>
    <br>
    <label for="text" style="margin:5px 270px"><b> First Name</b></label><br>
    <input type="text" placeholder="First Name" pattern="[a-zA-Z ]*$" name="firstname" required>
    <br>
    <label for="text" style="margin:5px 270px"><b>Last Name</b></label><br>
    <input type="text" placeholder="Last Name" pattern="[a-zA-Z ]*$" name="lastname" required>
      <br>
    <label for="text" style="margin:5px 270px"><b>City</b></label><br>
    <input type="text" placeholder="Enter City" pattern="[a-zA-Z ]*$"  name="city" required>
     <br>
    <label for="text" style="margin:5px 270px"><b>Phone Number</b></label><br>
    <input type="text" placeholder="Enter phone" pattern="[0-9]{11}" name="phone" required>
    <br>
    <label for="text" style="margin:5px 270px"><b>Email</b></label><br>
    <input type="email" placeholder="name@domain.xyz" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" name="email" required>
    <br>
    <label for="text" style="margin:5px 270px"><b>Password</b></label><br>
    <input type="password" placeholder="Enter password" name="passwd" required>
 <br>
    <label for="text" style="margin:5px 270px"><b>Education</b></label><br>
    <input type="text" placeholder="Enter qualification" pattern="[a-zA-Z ]*$"  name="education" required>
 <br>
    <label for="text" style="margin:5px 270px"><b>Number of Languages</b></label><br>
    <input type="text" placeholder="Enter languages you can speak" name="nooflang" required>
 
    
    <hr>
    <p style="margin:5px 270px">By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

    <button type="submit" class="registerbtn">Register</button>
  </div>

  
</form>

<br>
<h2 align="left" style="color:black;font-size:60px;font-family:Impact;">Feedback </h2>
</div>
<form action="feedback.php" method="post">
<div class="container">
    <h1 style="margin:5px 270px">Feedback Form <i style="color:red">*optional</i></h1>
    <p style="margin:5px 270px">Please fill in this form to provide feedback.</p>
    <hr>
    <br>
    <label for="text" style="margin:5px 270px"><b>Name</b></label><br>
    <input type="text" placeholder="Enter name" pattern="[a-zA-Z ]*$" name="name" required>
    <br>
    <label for="text" style="margin:5px 270px"><b>Comments</b></label><br>
    <input type="text"  name="comments">
    <hr>
    <p style="margin:5px 270px">By creating an account you agree to our <a href="#">Terms & Privacy.</a></p>

    <button type="submit" class="registerbtn">Submit</button>
</div>
</form>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tour_guide";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM feedback";
$result = $conn->query($sql);


        echo '<html>';
	echo '<body>';  
	echo '<div style="text-align:left;font-size:20px;">';
        echo "<b>YOUR VALUABLE FEEDBACK</b>"."<br>"."<br>";
        echo '</div>';

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {

        echo '<html>';
	echo '<body>';  
	echo '<div style="text-align:left;font-size:20px;">';
        echo "Name: " . $row["name"]."<br>"."<br>".
        "Comments : " . $row["comments"]."<br>"."<br>";
        echo '</div>';
    }
} else {
    echo "0 results";
}


$conn->close();
?>


</body>
</html>









