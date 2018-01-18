<!DOCTYPE html>
<html>
<head>
<style>
table {
    width: 100%;
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
    padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>

<?php
$q = intval($_GET['q']);

$con = mysqli_connect('localhost','root','','register');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}
mysqli_select_db($con,"register");
$sql="SELECT * FROM slot WHERE doctor_id = '".$q."'";
$result = mysqli_query($con,$sql) or die("Error: ".mysqli_error($con));


echo "<table>
<tr>
<th>9:00am-10:00am</th>
<th>10:00am-11:00am</th>
<th>11:00am-12:00noon</th>
<th>1:00pm-2:00pm</th>
<th>2:00pm-3:00pm</th>
<th>3:00pm-4:00pm</th>
</tr>";
while($row = mysqli_fetch_array($result)) {
	//echo "<tr><td>".$row['name']."</td></tr>";
    echo "<tr>";
	if ($row['slot1']==0){
    echo "<td>" . "Available" . "</td>";
	}
	else{
    echo "<td>" . "Unvailable" . "</td>";
	}
    if ($row['slot2']==0){
    echo "<td>" . "Available" . "</td>";
	}
	else{
    echo "<td>" . "Unvailable" . "</td>";
	}
	if ($row['slot3']==0){
    echo "<td>" . "Available" . "</td>";
	}
	else{
    echo "<td>" . "Unvailable" . "</td>";
	}
	if ($row['slot4']==0){
    echo "<td>" . "Available" . "</td>";
	}
	else{
    echo "<td>" . "Unvailable" . "</td>";
	}
	if ($row['slot5']==0){
    echo "<td>" . "Available" . "</td>";
	}
	else{
    echo "<td>" . "Unvailable" . "</td>";
	}
	if ($row['slot6']==0){
    echo "<td>" . "Available" . "</td>";
	}
	else{
    echo "<td>" . "Unvailable" . "</td>";
	}
    echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>
</body>
</html>