<!DOCTYPE html>
<html >
<head>
  <meta charset="utf-8">

	<!-- Use the .htaccess and remove these lines to avoid edge case issues.
			 More info: h5bp.com/b/378 -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<title>Gumby - A Flexible, Responsive CSS Framework - Powered by SASS</title>
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="humans.txt">

	<link rel="shortcut icon" href="favicon.png" type="image/x-icon" />

	<!-- Facebook Metadata /-->
	<meta property="fb:page_id" content="" />
	<meta property="og:image" content="" />
	<meta property="og:description" content=""/>
	<meta property="og:title" content=""/>

	<!-- Google+ Metadata /-->
	<meta itemprop="name" content="">
	<meta itemprop="description" content="">
	<meta itemprop="image" content="">

	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">

	<!-- We highly recommend you use SASS and write your custom styles in sass/_custom.scss.
		 However, there is a blank style.css in the css directory should you prefer -->
	<link rel="stylesheet" href="css/gumby.css">
	<!-- <link rel="stylesheet" href="css/style.css"> -->

	<script src="js/libs/modernizr-2.6.2.min.js"></script>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" >


<style>


input {
    border: none;
    background: transparent;
}
    body
 {

background: url("https://res.cloudinary.com/twenty20/private_images/t_watermark-criss-cross-10/v1458545544000/photosp/b34f073e-eee7-4551-b757-01c5a95fbdf6/stock-photo-still-life-plastic-business-healthy-eating-hygiene-hand-glass-chair-healthy-lifestyle-b34f073e-eee7-4551-b757-01c5a95fbdf6.jpg") no-repeat center center fixed;
    
background-size: cover;

font-size: 16px;

font-family: 'Lato', sans-serif;
    
font-weight: 300;
    
margin: 0;
    
color: #666;

}



/* Typography */

h1#title
 {
    
font-family: 'Roboto Slab', serif;
    
font-weight: 300;
    
font-size: 3.2em;
    
color: white;
    
text-shadow: 0 0 10px rgba(0,0,0,0.8);
    
margin: 0 auto;
    
padding-top: 180px;
    
max-width: 300px;
    
text-align: center;
    
position: relative;
    
top: 0px;
}



h1#title span span {
    
font-weight: 400;
}



h2 {
    
text-transform: uppercase;
    
color: white;
    
font-weight: 400;
    
letter-spacing: 1px;
    
font-size: 1.4em;
    
line-height: 2.8em;
}



a {
    text-decoration: none;
    color: #666;
}



a:hover {
    
color: #aeaeae;
}







.login-box {
    
background-color: white;
    
max-width: 1100px;
    
margin: 0 auto;
    
position: relative;
    top: 80px;
    
padding-bottom: 30px;
    
border-radius: 5px;
    
box-shadow: 0 5px 50px rgba(0,0,0,0.4);
    
text-align: center;
}



.login-box .box-header {
    
background-color: #6699FF;
    
margin-top: 0;
    
border-radius: 5px 5px 0 0;
}



.login-box label {
    
font-weight: 700;
    
font-size: .8em;
    
color: #888;
    
letter-spacing: 1px;
    
text-transform: uppercase;
    
line-height: 2em;
}



.login-box input {

margin-bottom: 20px;

padding: 8px;

border: 1px solid #ccc;

border-radius: 2px;

font-size: 1em;
    
color: #888;
}


.login-box input:focus 
{
    
outline: none;
    
border-color: #665851;
    
transition: 0.5s;
    
color: #665851;
}


.login-box button 
{
    
margin-top: 0px;
    
border: 0;
    
border-radius: 2px;
    
color: white;
    
padding: 10px;
    
text-transform: uppercase;
    
font-weight: 400;
    
font-size: 0.7em;
    
letter-spacing: 1px;
    
background-color: #665851;
    
cursor:pointer;
    outline: none;
}



.login-box button:hover {
    
opacity: 0.7;
    
transition: 0.5s;
}




.login-box button:hover {
    
opacity: 0.7;
    
transition: 0.5s;
}



.selected {
    
color: #665851!important;
    
transition: 0.5s;
}
   
table,th,td {
  align-self: center;
  border : 1px solid black;
  border-collapse: collapse;
  background-color: aliceblue;
}
th,td {
  padding: 5px;
}
</style>
    

  
</head>

<body>
<?php
require('db.php');
session_start();

$ID= $_SESSION['id'];
echo $ID;
if (isset($_REQUEST['date'])){

$date = stripslashes($_REQUEST['date']);
    $date = mysqli_real_escape_string($con,$date);
    
$slot = stripslashes($_REQUEST['slot']);
   $slot = mysqli_real_escape_string($con,$slot);
   
$test_name = stripslashes($_REQUEST['test_name']);
   $test_name = mysqli_real_escape_string($con,$test_name);
   
   
        $query = "INSERT into `appointment` (id,test_name,date,time)
VALUES ('$ID','$test_name','$date','$slot')";
        $result = mysqli_query($con,$query);
       
        if($result){
            $last_id = $con->insert_id;
           

            echo "<div class='form'>
<h1>You are registered successfully.</h1></div>";

 echo "<h1><a href='index.html'>Back </a></h1>";
        }

    else{
	echo "<div class='form'>
<h3>Slot not available.</h3>
<br/>Click here to fix<a href='appointment.php'>Appointment</a></div>";
    }
    }else{
?>

<div class="form">
<form name="registration" action="" method="post" >
  <div class="container__child signup__form">
<div class="login-box ">
 <div class="box-header">
<h2>Test Details</h2>
</div>

<p id='costshow'></p><br>	
	<table>
	<tr>
		<th width="15%">Test Name</th>
		<th width="15%">Cost</th>
	</tr>
		<td>CBC</td>
		<td>Rs.100</td>
	<tr>
		<td>Urine</td>
		<td>Rs.300</td>
	</tr>
    <tr>
		<td>Vitamin D</td>
		<td>Rs.300</td>
	</tr>
	<tr>
		<td>Blood sugar</td>
		<td>Rs.100</td>
	</tr>
	</table>
      </div><br><br>
<div class="login-box ">

<div class="box-header">
<h3>Select your appointment details</h3>
</div>
      <select name="test_name" onchange="showCost(this.value)">
  <option value="CBC">CBC</option>
  <option value="URINE">URINE</option>
  <option value="VITAMIN D">VITAMIN D</option>
  <option value="BLOOD SUGAR">BLOOD SUGAR</option>
</select>
<br>
<div id="costshow"></div>
<br>
     <div class="form-group">
        <label for="date">Date</label>
        <input class="form-control" type="date" name="date" id="date" />
      </div>
  <div class="form-group">  
    <br>Select Time:<br>
    <select name="slot">
        <option value="1">9:00-10:00am</option>
        <option value="2">10:00-11:00am</option>
        <option value="3">11:00am-12:00noon</option>
        <option value="4">1:00pm-2:00pm</option>
      </select>
      
      <div class="m-t-lg">
        <ul class="list-inline">
          <li>
            <br>  
            <input class="button button:hover" type="submit" value="confirm appointment" />
          </li>
        </ul>
      </div>
  
  </div>
      </div>
    </div>
    <br><br>
 </form>


</div> 
<?php } ?>
    
<script>
function showCustomer(str) {
  var xhttp;    
  if (str == "") {
    document.getElementById("txtHint").innerHTML = "";
    return;
  }
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("txtHint").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "getCost.asp?q="+str, true);
  xhttp.send();
}
</script>	
	
	
</body>
</html>
