<!DOCTYPE html>
<html>
<head>

<style>

input {
    border: none;
    background: transparent;
}
    body
 {

background: url("https://images.pexels.com/photos/248152/pexels-photo-248152.jpeg?h=350&auto=compress&cs=tinysrgb") no-repeat center center fixed;
    
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


</style>
<meta charset="utf-8">
<title>Registration</title>

</head>
<body>

  

<div class="form">
<form name="registration" action="" method="post" >

<div class="container">
<div class="login-box ">

<div class="box-header">
<h2>CBC Test</h2>
</div>
   
  <table border="0" width=100%>
 <tr>
  <th>Lab name: Sushrusha lab</th>
 
 </tr>

 <tr>
  
</table>

<hr><br>

<?php
$con=mysqli_connect("localhost","root","","register");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
session_start();

$Id=$_SESSION['id'];

$result = mysqli_query($con,"SELECT * FROM users where id=$Id");



while($row = mysqli_fetch_array($result))
  {

 echo "<table border='1'>";
 

  echo "<tr>";
  echo "<th>Name:</th>";
  echo "<th>". $row['name'] ."</th>";
  echo "<th>Age</th>";
  echo "<th>". $row['age'] . "</th>";
  echo "</tr>";

 echo "<tr>";
 echo "<th width=25%>id</th>";
 echo "<th width=25%>". $row['id'] ."</th>";
 echo "<th width=25%>contact</th>";
 echo "<th width=25%>". $row['contact'] ."</th>";
 echo " <th></th>";
 echo " </tr>";

 echo "<tr>";
 echo "<th>Ordering Doctor:</th>";
 echo "<th>Dr.Rutuja Nighot</th>";
 echo "<th>Sample:</th>";
 echo "<th>Blood</th>";
 echo "</tr>";



  }
echo "</table>";

mysqli_close($con);
?>



<br><hr><br>

<!--Name of the main test to be displayed here eg.CBC-->
<b>Test- Blood Sugar</b>
<br><br><br>

<?php
$con=mysqli_connect("localhost","root","","register");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$res = mysqli_query($con,"SELECT * FROM BStest where id=$Id");



while($row = mysqli_fetch_array($res))
  {

 echo "<table border='0' cellpadding='10' >";
 

  echo "<tr>";
  echo "<th>Test Name</th>";
  echo "<th>Results</th>";
  echo "<th>Units</th>";
  echo "<th>Normal Glucose Tolerance</th>";
   echo "<th>Impaired Glucose Tolerance</th>";
    echo "<th>Diabetes Mellitus</th>";
  echo "</tr>";

   echo "<tr>";
  echo "<th></th>";
  echo "<th></th>";
  echo "<th></th>";
  echo "<th></th>";
  echo "</tr>";



 echo "<tr>";
 echo "<th width=25%>Fasting Plasma Glucose</th>";
 echo "<th width=25%>". $row['glucose'] ."</th>";
 echo "<th width=25%>mg/dL</th>";
 echo "<th width=25%><110.0</th>";
  echo "<th width=25%>110-125</th>";
   echo "<th width=25%>>126</th>";
 echo " <th></th>";
 echo " </tr>";

   echo "<tr>";
  echo "<th></th>";
  echo "<th></th>";
  echo "<th></th>";
  echo "<th></th>";
  echo "</tr>";


 echo "<tr>";
 echo "<th>Two Hours After glucose load</th>";
 echo "<th>". $row['IG'] ."</th>";
 echo "<th>mg/dL</th>";
 echo "<th><140</th>";
  echo "<th>140-199</th>";
   echo "<th>>200</th>";
 echo "</tr>";

 

  }
echo "</table>";

mysqli_close($con);
?>

<br><br>

<p>*Values between 50 and 70 are often seen in healthy people</p>

<p>**The condition of "prediabetes" puts you at risk for developing Type 2 diabetes, high blood pressure, and blood lipid disorders</p>


      
    
  

    </div>

</div>
</div>
</form>


</div>


</body>

<script>
    $(document).ready(function () {
        $('#logo').addClass('animated fadeInDown');
        $("input:text:visible:first").focus();
    });
    $('#username').focus(function() {
        $('label[for="username"]').addClass('selected');
    });
    $('#username').blur(function() {
        $('label[for="username"]').removeClass('selected');
    });
    $('#password').focus(function() {
        $('label[for="password"]').addClass('selected');
    });
    $('#password').blur(function() {
        $('label[for="password"]').removeClass('selected');
    });
</script>
</html>