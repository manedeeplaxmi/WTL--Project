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
<h2>Cumulative Test Report</h2>
</div>
   
  <table border="0" width=100%>
 <tr>
  <th>Lab name: Sushrusha Lab</th>

 </tr>

 <tr>
  
 </tr>
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
 echo "<th>Dr.Rutuja Nihot</th>";
 echo "<th>Sample:</th>";
 echo "<th>Blood</th>";
 echo "</tr>";



  }
echo "</table>";

mysqli_close($con);
?>



<br><hr><br>

<!--Name of the main test to be displayed here eg.CBC-->
<b>Test- Cumulative Test Report</b>
<br><br><br>

<?php
$con=mysqli_connect("localhost","root","","register");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$res = mysqli_query($con,"SELECT * FROM cumulativetest where id=$Id");



while($row = mysqli_fetch_array($res))
  {

 echo "<table border='0'>";
 

  echo "<tr>";
  echo "<th><u>Test Name</u></th>";

  echo "<th><u>Results</u></th>";
   echo "<th><u>Units</u></th>";
  echo "<th><u>Reference</u></th>";
  echo "</tr>";

    echo "<tr>";
  echo "<th></th>";
  echo "<th></th>";
  echo "<th></th>";
  echo "<th></th>";
  echo "</tr>";


   echo "<tr>";
  echo "<th><u>Basic Metabolic Panel</u></th>";
  echo "<th></th>";
  echo "<th></th>";
  echo "<th></th>";
  echo "</tr>";

    echo "<tr>";
  echo "<th></th>";
  echo "<th></th>";
  echo "<th></th>";
  echo "<th></th>";
  echo "</tr>";


 echo "<tr>";
 echo "<td width=35%>Sodium</th\d>";
 echo "<td width=35%>". $row['NA'] ."</td>";
 echo "<td width=30%>mEq/L</td>";
  echo "<td width=30%>136 - 145</td>";
 echo " <th></th>";
 echo " </tr>";

   echo "<tr>";
  echo "<th></th>";
  echo "<th></th>";
  echo "<th></th>";
  echo "<th></th>";
  echo "</tr>";





 echo "<tr>";
 echo "<td>Potassium</td>";
 echo "<td>". $row['K'] ."</td>";
  echo "<td width=30%>mEq/L</td>";
 echo "<td>3.5-5.1</td>";
 echo "</tr>";

   echo "<tr>";
  echo "<th></th>";
  echo "<th></th>";
  echo "<th></th>";
  echo "<th></th>";
  echo "</tr>";




 echo "<tr>";
 echo "<td>Carbon Dioxide</td>";
 echo "<td>". $row['CO'] ."</td>";
  echo "<td width=30%>mEq/L</td>";

 echo "<td>23-29</td>";
 echo "</tr>";

   echo "<tr>";
  echo "<th></th>";
  echo "<th></th>";
  echo "<th></th>";
  echo "<th></th>";
  echo "</tr>";


 echo "<tr>";
 echo "<td>Cloride</td>";
 echo "<td>". $row['CL'] ."</td>";
  echo "<td width=30%>mEq/L</td>";

 echo "<td>98-107</td>";
 echo "</tr>";

   echo "<tr>";
  echo "<th></th>";
  echo "<th></th>";
  echo "<th></th>";
  echo "<th></th>";
  echo "</tr>";


 echo "<tr>";
 echo "<td>Glucose</td>";
 echo "<td>". $row['glucose'] ."</td>";
  echo "<td width=30%>mg/dL</td>";

 echo "<td>74-100</td>";
 echo "</tr>";

   echo "<tr>";
  echo "<th></th>";
  echo "<th></th>";
  echo "<th></th>";
  echo "<th></th>";
  echo "</tr>";





 echo "<tr>";
 echo "<td>Calcium</td>";
 echo "<td>". $row['Ca'] ."</td>";
  echo "<td width=30%>mg/dL</td>";

 echo "<td>23-29</td>";
 echo "</tr>";

   echo "<tr>";
  echo "<th></th>";
  echo "<th></th>";
  echo "<th></th>";
  echo "<th></th>";
  echo "</tr>";


 echo "<tr>";
 echo "<td>Blood Urea Nitrogen </td>";
 echo "<td>". $row['BUN'] ."</td>";
  echo "<td width=30%>mg/dL</td>";

 echo "<td>8-23</td>";
 echo "</tr>";

   echo "<tr>";
  echo "<th></th>";
  echo "<th></th>";
  echo "<th></th>";
  echo "<th></th>";
  echo "</tr>";



   echo "<tr>";
 echo "<td>Creatinine</td>";
 echo "<td>". $row['C'] ."</td>";
   echo "<td width=30%>mg/dL</td>";
 echo "<td>0.8-1.3</td>";
 echo "</tr>";

  echo "<tr>";
  echo "<th></th>";
  echo "<th></th>";
  echo "<th></th>";
  echo "<th></th>";
  echo "</tr>";





  }
echo "</table>";

mysqli_close($con);
?>

   
    
  

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