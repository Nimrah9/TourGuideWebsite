<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<head>
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
* {box-sizing: border-box;}
body {font-family: Cambria, sans-serif;}
.mySlides {display: none;}
img {align: left;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: left;
}

/* Caption text *
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: relative;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/5 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}


</style>
</head>
<body bgcolor="E5FFCC">
<h2 align="left" style="color:#006600;font-size:120px;font-family:Impact, sans-serif;"><i> ENROUTE PAKISTAN</i></h2>
<p align="right" style="color:black;font-size:30px;font-family:Impact;">Get ready to embark with us on this beautiful journey!</p>

<div class="icon-bar">
  <a class="active" href="#"><i class="fa fa-home">Home</i></a> 
  <a href="3.php"><i class="fa fa-search">Packages</i></a> 
  <a href="about.php"><i class="fa fa-envelope">About Us</i></a> 

</div>


<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 5</div>
  <img src="slideshow1.jpg" height="500" width="1600" >
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 5</div>
  <img src="slideshow2.jpg" height="500" width="1600"  >
  <div class="text">Caption Two</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 5</div>
  <img src="slideshow3.jpg" height="500" width="1600" >
  <div class="text">Caption Three</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">4 / 5</div>
  <img src="slideshow4.jpg" height="520" width="1600" >
  <div class="text">Caption Three</div>
</div>


<div class="mySlides fade">
  <div class="numbertext">5 / 5</div>
  <img src="slideshow5.jpg" height="520" width="1600" >
  <div class="text">Caption Three</div>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
<span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 3000); // Change image every 2 seconds
}
</script>

<h2 align="center" style="color:green;font-size:70px;font-family:Impact;">Karachi (The City of Lights)</h2>

<br>
<br>
<br>


<div class="row">
  <div class="column">
    <div class="card">
      <img src="k1.jpg" alt="Jane" style="width:100%" height="350">
      <div class="container">
        <h2>Wazir Mansion</h2>
        
        <p>Wazir Mansion known officially as Quaid-i-Azam Birthplace Museum is a former family home in the Kharadar district of Karachi, Sindh, Pakistan which is considered the birthplace of the country's founder, Muhammad Ali Jinnah</p>
        
        
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="k2.jpg" alt="Mike" style="width:100%" height="350">
      <div class="container">
        <h2>Frere Hall </h2>
        
        <p>Frere Hall is a building in Karachi, Pakistan that dates from the early British colonial-era in Sindh. Completed in 1865, Frere Hall was originally intended to serve as Karachi's town hall, and now serves as an exhibition space and library. It is considered one of Karachi's most iconic buildings</p>
        
      </div>
    </div>
  </div>
  <div class="column">
    <div class="card">
      <img src="k3.jpg" alt="John" style="width:100%" height="350">
      <div class="container">
        <h2>The Mohatta Palace</h2>
        
        <p>The Mohatta Palace is a museum located in Karachi, Sindh, Pakistan. It was built in the posh seaside locale of Clifton by Shivratan Chandraratan Mohatta, a Hindu Marwari businessman from modern day Rajasthan in India, in 1927, as his summer home. The architect of the palace was Agha Ahmed Hussain.</p>
        
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="column">
    <div class="card">
      <img src="k4.jpg" alt="Jane" style="width:100%" height="350">
      <div class="container">
        <h2>Mazar e Quaid</h2>
        
        <p>Mazar-e-Quaid, also known as the Jinnah Mausoleum or the National Mausoleum, is the final resting place of Quaid-e-Azam Muhammad Ali Jinnah, the founder of Pakistan</p>
        
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="k5.jpg" alt="Mike" style="width:100%" height="350">
      <div class="container">
        <h2>Sea Side</h2>
        
        <p>The beach what else do you need?</p>
        
      </div>
    </div>
  </div>
  <div class="column">
    <div class="card">
      <img src="k6.jpg" alt="John" style="width:100%" height="350">
      <div class="container">
        <h2>St. Patrick�s Cathedral, </h2>
        
        <p>St. Patrick�s Cathedral, the seat of the Roman Catholic Archdiocese of Karachi, is situated on Shahrah-e-Iraq, formerly known as Clarke Street, located near the Empress Market in Karachi, Pakistan.</p>
        
      </div>
    </div>
  </div>
</div>
<p></p>
<br>
<br>
<br>
<h2  align="center" style="color:green;font-size:70px;font-family:Impact;">Lahore (The Garden of the Mughals)</h2>

<div class="row">
  <div class="column">
    <div class="card">
      <img src="l1.jpg" alt="Jane" style="width:100%" height="350">
      <div class="container">
        <h2>Badshahi Masjid</h2>
      
        <p>DescriptionThe Badshahi Mosque is a Mughal era masjid in Lahore, capital of the Pakistani province of Punjab, Pakistan. The mosque is located west of Lahore Fort along the outskirts of the Walled City of Lahore, and is widely considered to be one of Lahore's most iconic landmarks. </p>
        
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="l2.jpg" alt="Mike" style="width:100%" height="350">
      <div class="container">
        <h2>Lahore Fort</h2>
        
        <p>The Lahore Fort, is a citadel in the city of Lahore, Punjab, Pakistan. The fortress is located at the northern end of walled city Lahore, and spreads over an area greater than 20 hectares. It contains 21 notable monuments, some of which date to the era of Emperor Akbar.</p>

         </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="l3.jpg" alt="John" style="width:100%" height="350">
      <div class="container">
        <h2> The Shalimar Bagh</h2>
        
        <p>The Shalimar Gardens, sometimes spelt Shalamar Gardens, is a Mughal garden complex located in Lahore, capital of the Pakistani province of Punjab. The gardens date from the period when the Mughal Empire was at its artistic and aesthetic zenith, and are now one of Pakistan's most popular tourist destinations.</p>
        </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="column">
    <div class="card">
      <img src="l4.jpg" alt="Jane" style="width:100%"height="350">
      <div class="container">
        <h2>Minar e Pakistan</h2>
        
        <p>Minar-e-Pakistan is a national monument located in Lahore, Pakistan. The tower was built between 1960 and 1968 on the site where the All-India Muslim League passed the Lahore Resolution on 23 March 1940</p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="l5.jpg" alt="Mike" style="width:100%" height="350">
      <div class="container">
        <h2>Tomb of Jahangir</h2>
        
        <p>The Tomb of Jahangir is a 17th-century mausoleum built for the Mughal Emperor Jahangir. The mausoleum dates from 1637, and is located in Shahdara Bagh in Lahore, Punjab, Pakistan, along the banks of the Ravi River.</p>
        
      </div>
    </div>
  </div>
  <div class="column">
    <div class="card">
      <img src="l6.jpg" alt="John" style="width:100%" height="350">
      <div class="container">
        <h2>Masjid Wazir Khan</h2>
        
        <p>The Wazir Khan Mosque is 17th century mosque located in the city of Lahore, capital of the Pakistani province of Punjab. The mosque was commissioned during the reign of the Mughal Emperor Shah Jahan as part of an ensemble of buildings that also included the nearby Shahi Hammam baths.</p>
      </div>
    </div>
  </div>
</div>
<br>
<br>

<h2 align="center" style="color:green;font-size:70px;font-family:Impact;">Northern Areas (The Heaven on Earth)</h2>
<br>
<br>

<div class="row">
  <div class="column">
    <div class="card">
      <img src="n1.jpg" alt="Jane" style="width:100%" height="350">
      <div class="container">
        <h2>Saif Ul Mulook</h2>
        
        <p>Saiful Muluk is a mountainous lake located at the northern end of the Kaghan Valley, near the town of Naran in the Saiful Muluk National Park. The lake is a source of the Kunhar river. At an elevation of 3,224 m above sea level, the lake is located above the tree line, and is one of the highest lakes in Pakistan.</p>
        </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="n2.jpg" alt="Mike" style="width:100%" height="350">
      <div class="container">
        <h2>Attabad Lake</h2>
       
        <p>Attabad Lake is a lake in Gojal Valley, Hunza, Gilgit Baltistan, an administrative region of Pakistan. The lake was created in January 2010 as a result of the Attabad Disaster.</p>
       </div>
    </div>
  </div>
  <div class="column">
    <div class="card">
      <img src="n3.jpg" alt="John" style="width:100%" height="350">
      <div class="container">
        <h2>Baltit Fort</h2>
        <p>Baltit Fort is a fort in the Hunza valley, near the town of Karimabad, in the Gilgit-Baltistan region of northern Pakistan. Founded in the 8th CE, it has been on the UNESCO World Heritage Tentative list since 2004.</p>
        </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="column">
    <div class="card">
      <img src="n4.jpg" alt="Jane" style="width:100%" height="350">
      <div class="container">
        <h2>Khunjerab Pass</h2>
        <p>Khunjerab Pass is a high mountain pass in the Karakoram Mountains in a strategic position on the northern border of Pakistan and on the southwest border of China</p>
        </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="n5.jpg" alt="Mike" style="width:100%" height="350">
      <div class="container">
        <h2>Fairy Meadows</h2>
        <p>Fairy Meadows, named by German climbers and locally known as Joot, is a grassland near one of the base camp sites of the Nanga Parbat, located in Diamer District, Gilgit-Baltistan, Pakistan</p>
         </div>
    </div>
  </div>
  <div class="column">
    <div class="card">
      <img src="n6.jpg" alt="John" style="width:100%" height="350">
      <div class="container">
        <h2>Babusar</h2>
        <p>Babusar Pass or Babusar Top is a mountain pass at the north of the 150 km. long Kaghan Valley connecting it via the Thak Nala with Chilas on the Karakoram Highway. It is the highest point in the babusar valley that can be easily accessed by cars.</p>
       </div>
    </div>
  </div>
</div>
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
?>
</body>
</html> 
