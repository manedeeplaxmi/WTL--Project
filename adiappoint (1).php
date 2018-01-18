<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Spectre sign up form</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.min.css'>
<link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,300'>
<link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Roboto:400,700,300'>
<link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css'>



  
</head>

<body>
<?php
require('db.php');
session_start();

$ID= $_SESSION['id'];

if (isset($_REQUEST['name'])){
        // removes backslashes
  $name = stripslashes($_REQUEST['name']);
    $name = mysqli_real_escape_string($con,$name); 

     $email = stripslashes($_REQUEST['email']);
  $email = mysqli_real_escape_string($con,$email);

    $age = stripslashes($_REQUEST['age']);
    $age = mysqli_real_escape_string($con,$age); 

    $contact = stripslashes($_REQUEST['contact']);
    $contact = mysqli_real_escape_string($con,$contact); 

 
$date = stripslashes($_REQUEST['date']);
    $date = mysqli_real_escape_string($con,$date);
    
$slot = stripslashes($_REQUEST['slot']);
   $slot = mysqli_real_escape_string($con,$slot);
   
   
        $query = "INSERT into `appointment` (id,name,email,age,contact,date,time)
VALUES ('$ID','$name', '$email','$age','$contact','$date','$slot')";
        $result = mysqli_query($con,$query);
       
        if($result){
            $last_id = $con->insert_id;
           

            echo "<div class='form'>
<h1>You are registered successfully.</h1></div>";
 echo "<h1>Your ID is: " . $last_id."</h1>";
 echo "<h1><a href='index.html'>Back </a></h1>";
        }
    else{
             echo "<div class='form'>
<h1>Usnsuccessful.</h1></div>";

 echo "<h1><a href='index.html'>Back </a></h1>";}
}
?>

 
  
<div class="form">
<form name="registration" action="" method="post" >
  <div class="signup__container">
  <div class="container__child signup__thumbnail">
    <div class="thumbnail__logo">
      <svg class="logo__shape" width="25px" viewBox="0 0 634 479" xmlns="http://www.w3.org/2000/svg">
      </svg>
      <h1 class="logo__text"></h1><br>
       <h1 class="logo__text">Aditi More</h1><br>
      <h1 class="logo__text">MBBS</h1><br>
      <h1 class="logo__text">General Physician</h1>
    </div>
    <div class="thumbnail__content text-center">
      <img src="img\adi.jpg" alt="Smiley face" width="100" height="100"></img>
      <h3 class="heading--primary">Vashi clinic</h3>
      <h6 >B2/5/23, Sector-15, Vashi, Navi Mumbai - 400703, Navi Mumbai</h6>
    </div>
      <input type="button" value="Appointment schedule" onclick='displayCD(1)'></input>
 <br><br>
<p id='showCD'></p><br> <br><br><br>
   
    <div class="signup__overlay"></div>
  </div>
  <div class="container__child signup__form">
      
       
      
      <div class="form-group">
        <label for="name">Name</label>
        <input class="form-control" type="text" name="name" id="name" placeholder="Deepa Mane" required />
      </div>
      
      <div class="form-group">
        <label for="email">Email</label>
        <input class="form-control" type="text" name="email" id="email" placeholder="deepa.mane@gmail.com" required />
      </div>
      <div class="form-group">
        <label for="age">Age</label>
        <input class="form-control" type="text" name="age" id="age" placeholder="21" required />
      </div>
      <div class="form-group">
        <label for="contact">Contact</label>
        <input class="form-control" type="text" name="contact" id="contact" placeholder="9870216239" required />
      </div>
 
     <div class="form-group">
        <label for="date">Date</label>
        <input class="form-control" type="date" name="date" id="date" />
      </div>
  <div class="form-group">  
    <br>Select Time:<br>
    <select name="slot">
        <option value="1">9-10</option>
        <option value="2">10-11</option>
        <option value="3">11-12</option>
        <option value="4">12-1</option>
      </select>
      
      <div class="m-t-lg">
        <ul class="list-inline">
          <li>
            <input class="btn btn--form" type="submit" value="confirm appointment" />
          </li>
          <li>
          
          </li>
        </ul>
      </div>
  
  </div>
</div>
 

 </form>



</div> 
 
   
<table id="demo"></table>
<script>
var x,xmlhttp,xmlDoc
xmlhttp = new XMLHttpRequest();
xmlhttp.open("GET", "APPOINTMENT.XML", false);
xmlhttp.send();
xmlDoc = xmlhttp.responseXML; 
x = xmlDoc.getElementsByTagName("CD");
/*table="<tr><th>Artist</th><th>Title</th></tr>";
   for (i = 1; i <=x.length; i++) { 
  table += "<tr onclick='displayCD(" + i + ")'><td>";
  table += x[i-1].getElementsByTagName("DOCTOR")[0].childNodes[0].nodeValue;
  table += "</td><td>";
  table +=  x[i-1].getElementsByTagName("SLOT1S")[0].childNodes[0].nodeValue;
  table += "</td></tr>";   
 }*/
 
 
document.getElementById("demo").innerHTML = table;

function displayCD(str) {
  if (str=="") {
   document.getElementById("showCD").innerHTML="a";
    return;
  }
   str=str-1;  
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else { // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("showCD").innerHTML=this.responseText;
    }
  }
  xmlhttp.open("GET","getslot.php?q="+str,true);
  xmlhttp.send();
 } 
 
</script>    
</body>
</html>
