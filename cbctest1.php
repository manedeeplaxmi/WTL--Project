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

<?php
require('db.php');


if (isset($_REQUEST['id'])){
        // removes backslashes
  $id = stripslashes($_REQUEST['id']);
    $id = mysqli_real_escape_string($con,$id); 

    $Haemoglobin = stripslashes($_REQUEST['Haemoglobin']);
    $Haemoglobin = mysqli_real_escape_string($con,$Haemoglobin); 

    $RBC = stripslashes($_REQUEST['RBC']);
    $RBC = mysqli_real_escape_string($con,$RBC); 

     $WBC = stripslashes($_REQUEST['WBC']);
    $WBC = mysqli_real_escape_string($con,$WBC);

     $PVC = stripslashes($_REQUEST['PVC']);
    $PVC = mysqli_real_escape_string($con,$PVC);

      $PC = stripslashes($_REQUEST['PC']);
    $PC = mysqli_real_escape_string($con,$PC);

     $TLC = stripslashes($_REQUEST['TLC']);
    $TLC = mysqli_real_escape_string($con,$TLC);


   
   
        $query = "INSERT into `test` (id,Haemoglobin,RBC,WBC,PVC,PC,TLC)
VALUES ('$id','$Haemoglobin','$RBC','$WBC','$PVC','$PC','$TLC')";
        $result = mysqli_query($con,$query);
       
        if($result){
           
           

            echo "<div class='form'>
<h1>successful</h1></div>";

 echo "<h1><a href='index.html'>Back </a></h1>";
        }
    }else{
?>


  

<div class="form">
<form name="registration" action="" method="post" >

<div class="container">
<div class="login-box ">

<div class="box-header">
<h2>CBC Test</h2>
</div>
   
  <table border="0" width=100%>
 <tr>
  <th>Lab name: Sushrusha Lab</th>
  
 </tr>

 <tr>
 
 </tr>
</table>

<hr><br>


 <tr>
<th width=25%>ID :</th>
 <th width=25%><input type="text" name="id" /></th>
 
 </tr>





<br><hr><br>

<!--Name of the main test to be displayed here eg.CBC-->
<b>Test- CBC</b>
<br><br><br>





<table border='0'>
 

 <tr>
 <th>Test Name</th>
 <th>Results</th>
 <th>Units</th>
 <th>Ref.Interval</th>
  </tr>

<tr>
<th></th>
<th></th>
<th></th>
 <th></th>
 </tr>

<tr>
<th width=25%>Haemoglobin</th>
<th width=25%><input type="test" name="Haemoglobin" /></th>
<th width=25%>g/dL</th>
<th width=25%>11.50-15.00</th>
 <th></th>
 </tr>


<tr>
<th></th>
<th></th>
<th></th>
 <th></th>
 </tr>


<tr>
<th>RBC Count</th>
<th><input type="text" name="RBC" /></th>
<th>mill/mm3</th>
<th>3.80-4.80</th>
</tr>


<tr>
<th></th>
<th></th>
<th></th>
 <th></th>
 </tr>


<tr>
<th>WBC Count</th>
<th><input type="text" name="WBC" /></th>
<th>mill/mm3</th>
<th>4.50-11.00</th>
</tr>


<tr>
<th></th>
<th></th>
<th></th>
 <th></th>
 </tr>


<tr>
<th>Packed Cell Volume(PCV)</th>
<th><input type="text" name="PVC" /></th>
<th>%</th>
<th>36.00-46.00</th>
</tr>


<tr>
<th></th>
<th></th>
<th></th>
 <th></th>
 </tr>

<tr>
<th>Platelet Count</th>
<th><input tpe="text" name="PC" /></th>
<th>thou/mm3</th>
<th>150-450</th>
</tr>

<tr>
<th></th>
<th></th>
<th></th>
 <th></th>
 </tr>

<tr>
<th>Total Leukocyte Count(TLC)</th>
 <th><input type="text" name="TLC" /></th>
<th>thou/mm3</th>
 <th>4.00-10.00</th>
 </tr>



</table>
<button type="submit" class="submit">Submit</button>

<!--
<table border="0" width=100%>
 <tr>
  <th >Test Name</th>
  <th >Results</th>
  <th >Units</th>
  <th >Ref. Interval</th>
 </tr>

 <tr>
  <td>Haemoglobin</td>
  <td><input type="text" name="" id=""></td>
  <td>g/dL</td>
  <td>11.50-15.00</td>
 </tr>

 <tr>
  <td>RBC Count</td>
  <td><input type="text" name="" id=""></td>
  <td>mill/mm3</td>
  <td>3.80-4.80</td>
 </tr>

 <tr>
  <td>WBC Count</td>
  <td><input type="text" name="" id=""></td>
  <td>mill/mm3</td>
  <td>4.50-11.00</td>
 </tr>

 <tr>
  <td>Packed Cell Volume(PCV)</td>
  <td><input type="text" name="" id=""></td>
  <td>%</td>
  <td>36.00-46.00</td>
 </tr>

 <tr>
  <td>Platelet Count</td>
  <td><input type="text" name="" id=""></td>
  <td>thou/mm3</td>
  <td>150-450</td>
 </tr>

 <tr>
  <td>Total Leukocyte Count(TLC)</td>
  <td><input type="text" name="" id=""></td>
  <td>thou/mm3</td>
  <td>4.00-10.00</td>
 </tr>

</table>
-->
      
    
  

    </div>

</div>
</div>
</form>


</div>

<?php } ?>
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