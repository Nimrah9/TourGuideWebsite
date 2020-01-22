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
  background-color: green;
}
</style>
</head>
<body bgcolor="E5FFCC">
<h2 align="left" style="color:#006600;font-size:120px;font-family:Impact, sans-serif;"><i> ENROUTE PAKISTAN</i></h2>
<p align="right" style="color:black;font-size:30px;font-family:Impact;">Get ready to embark with us on this beautiful journey!</p>

<div class="icon-bar">
  <a  href="homepage.php"><i class="fa fa-home">Home</i></a> 
  <a  href="3.php"><i class="fa fa-search">Packages</i></a> 
  <a href="about.php"><i class="fa fa-envelope">About Us</i></a> 

</div>
<br>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tour_guide";
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$city = $_POST['city'];
$education = $_POST['education'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$passwd= $_POST['passwd'];
$nooflang = $_POST['nooflang'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "INSERT INTO applicant (firstname, lastname, city, phone, email, passwd,education, nooflang)
VALUES ('$firstname', '$lastname', '$city', '$phone', '$email','$passwd', '$education','$nooflang')";

if ($conn->query($sql) === TRUE) {
    
        echo '<html>';
	echo '<body>';  
	echo '<div style="text-align:center;font-size:30px;">';
    echo "<b>Registered successfully. You will soon be contacted by our team.</b>"."<br>"."<br>";
    echo '</div>';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}



$conn->close();
?>

</body>
</html>