<?php
include("connection.php");
error_reporting(0);
?>


<html lang ="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="form.css">
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <meta name="viewport" content="width-device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
  <title>Multi Step Form</title>
  </head>
<body>
    
  <div class="container">
    <header>ASTRONOMICA</header>
    <div class= "progress-bar">
      <div class="step">
        <p>Name</p>
        <div class="bullet">
          <span>1</span>
      </div>
      <div class="check fas fa-check">
      </div>
    </div>

      <div class="step">
        <p>Contact</p>
        <div class="bullet">
          <span>2</span>
      </div>
      <div class="check fas fa-check">
      </div>
      </div>

      <div class="step">
        <p>Birth</p>
        <div class="bullet">
          <span>3</span>
      </div>
      <div class="check fas fa-check">
      </div>  
      </div>

      <div class="step">
        <p>School </p>
        <div class="bullet">
          <span>4</span>
      </div>
      <div class="check fas fa-check">
      </div>
      </div>
    </div>
    <div class="form-outer">
      <form action="#">
        <div class="page slidepage">
          <div class="title">Basic Info:</div>
          <div class="field">
            <div class="label">First Name</div>
            <input type="text" name="fname">
          </div>
          <div class="field">
            <div class="label">Last Name</div>
            <input type="text" name="lname">
          </div>
          <div class="field nextBtn">
            <button>Next</button>
          </div>
          </div>

        <div class="page">
          <div class="title">Contact Info</div>
          <div class="field">
            <div class="label">Email Address</div>
            <input type="text" name="email">
          </div>
          <div class="field">
            <div class="label">Phone Number(Whatsapp)</div>
            <input type="number" name="number">
          </div>
          <div class="field btns">
            <button class="prev-1 prev">Previous</button>
            <button class="next-1 next">Next</button>
          </div>
          </div>
        
        <div class="page">
          <div class="title">Date of Birth</div>
          <div class="field">
            <div class="label">Date</div>
            <input type="date" name="dob">
          </div>
          <div class="field">
            <div class="label">Gender</div>
            <select name="gender">
              <option>Male</option>
              <option>Female</option>
              <option>Other</option>
            </select>
          </div>
          <div class="field btns">
            <button class="prev-2 prev">Previous</button>
            <button class="next-2 next">Next</button>
          </div>
          </div>
        
       
        <div class="page slidepage">
          <div class="title">School Details</div>
          <div class="field">
            <div class="label">Class</div>
            <select name="class">
                <option>Class</option>
              <option>9</option>
              <option>10</option>
            </select>
          </div>
          <div class="field">
            <div class="label">School</div>
            <select name="school">
                <option>Select the School</option>
              <option>Carmel School</option>
              <option>De Souza's School</option>
              <option>Delhi Public School - DPS Rourkela</option>
              <option>Guru Nanak Public School</option>
              <option>Ispat English Medium School</option>
              <option>Loreto English School</option>
              <option>Mar Gregorios Memorial English School</option>
              <option>Sri Aurobindo's Rourkela School</option>
              <option>St. Joseph's Convent School</option>
              <option>St. Paul's School</option>
              <option>St. Thomas English School</option>
              <option>Kendriya Vidyalaya Sector 6 Rorukela</option>
              <option>Gyanajyoti Public School</option>
              <option>Chinmaya Vidyalaya(English Medium)</option>
              <option>Deepika English Medium School</option>
              <option>DAV Public School</option>
              <option>ANK-DAV Public School</option>
              <option>Ispat DAV Public School</option>
              <option>St. Arnold's School</option>
              <option>Kendriya Vidyalaya Bondamunda School</option>
            </select>
          </div>
          
            <div class="tc">
            <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
          <label for="vehicle1"><a href="TC/T&C.pdf" download>Terms & Conditions</a> </label>
            </div>
            <div class="qr">
              <h3>Scan the QR for Payment of Rs.50:</h3>
              <img src="img/qr3.jpg" alt="QR" width="200" height="200">
           
          <div class="field">
            <div class="label">Enter Transaction ID</div>
            <input type="text" name="trans">
          </div> 
          <div class="field btns">
            <button class="prev-3 prev">Previous</button>
            <button class="submit">Submit</button>
          </div>
          </div>
        </form>
      </div>
  </div>
  <script src="form.js"></script>
</body>
</html>


<?php

$fn=$_GET['fname'];
$ln=$_GET['lname'];
$em=$_GET['email'];
$pn=$_GET['number'];
$db=$_GET['dob'];
$gn=$_GET['gender'];
$cl=$_GET['class'];
$sc=$_GET['school'];
$tr=$_GET['trans'];

// echo "$fn";
// echo "$ln";
// echo "$em";
// echo "$pn";
// echo "$db";
// echo "$gn";
// echo "$cl";
// echo "$sc";
// echo "$tr";


$query="insert into astronomica values('$fn','$ln','$em','$pn','$db','$gn','$cl','$sc','$tr')";
$data=mysqli_query($conn,$query);

if($data)
{
  // echo "Data inserted into database";
}
else
{
  // echo "Failed to insert data into database";
}
?>