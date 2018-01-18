<head>
<link rel="stylesheet" type="text/css" href="mystyle.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

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
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "register";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

require('db.php');
session_start();

$ID= $_SESSION['id'];


$sql = "SELECT id,test_name,date,time FROM appointment WHERE id=$ID";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
	echo "<h1>View your test appointment schedule:</h1><br><br>";
	echo "<table align=center><tr><th>Test Name</th><th>Date</th><th>Time</th></tr>";
    while($row = $result->fetch_assoc()) {
        if($row["time"]==1){
			echo "<tr><td>" . $row["test_name"]. "</td><td>" . $row["date"]. "</td><td>9:00-10:00am</td></tr>";
		}
		elseif($row["time"]==2){
			echo "<tr><td>" . $row["test_name"]. "</td><td>" . $row["date"]. "</td><td>10:00-11:00am</td></tr>";
		}
		elseif($row["time"]==3){
			echo "<tr><td>" . $row["test_name"]. "</td><td>" . $row["date"]. "</td><td>11:00am-12:00noon</td></tr>";
		}
		else{
			echo "<tr><td>" . $row["test_name"]. "</td><td>" . $row["date"]. "</td><td>1:00pm-2:00pm</td></tr>";
		}
    }
	echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>