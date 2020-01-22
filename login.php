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
  background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=password], input[type=email] {
  width: 60%;
  padding: 15px;
  margin: 5px  270px ;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus,, input[type=password]:focus, input[type=email]:focus {
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
  <a href="about.php"><i class="fa fa-envelope">About Us</i></a> 

</div>
<form action="submit.php"method="post">
  <div class="container">
    <h1 style="margin:5px 270px">Register</h1>
    <p style="margin:5px 270px">Please fill in this form to create an account.</p>
    <hr>
    <br>
    <label for="text" style="margin:5px 270px"><b>First Name</b></label><br>
    <input type="text" placeholder="Enter first name" pattern="[a-zA-Z ]*$" name="firstname" required>
    <br>
    <label for="text" style="margin:5px 270px"><b>Last Name</b></label><br>
    <input type="text" placeholder="Enter last name" pattern="[a-zA-Z ]*$"  name="lastname" required>

     <br>
    <label for="email" style="margin:5px 270px"><b>Email</b></label><br>
    <input type="email" placeholder="Enter email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" name="email" required>
      <br>
    <label for="psw" style="margin:5px 270px"><b>Password</b></label><br>
    <input type="password" placeholder="Enter Password" name="passwd" required>
     
    
    <br>
    <label for="text" style="margin:5px 270px"><b>Phone Number</b></label><br>
    <input type="text" placeholder="Enter phone number" pattern="[0-9]{11}" name="phone" required>
    
    <br>
    <hr>
    <h1 style="margin:5px 270px">Package Details</h1>
    <p style="margin:5px 270px">Please fill in this form. </p>
    <hr>
    <br>
    <label for="text" style="margin:5px 270px"><b>Package Location</b></label><br>
    <input type="text" placeholder="Karachi, Lahore or Northern Areas" pattern="[a-zA-Z ]*$" name="packagelocation" required>
    <br>
    <label for="text" style="margin:5px 270px"><b>Package Name</b></label><br>
    <input type="text" placeholder="Enter package name" pattern="[a-zA-Z ]*$"  name="packagename" required>
    
    
    <hr>
    <p style="margin:5px 270px">By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

    <button type="submit" class="registerbtn">Register</button>
  </div>
  
  
</form>


</body></html>