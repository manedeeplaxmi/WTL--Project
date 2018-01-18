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

background: url("img/test.jpeg") no-repeat center center fixed;
    
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

    $TSH = stripslashes($_REQUEST['TSH']);
    $TSH = mysqli_real_escape_string($con,$TSH); 

    $T4 = stripslashes($_REQUEST['T4']);
    $T4 = mysqli_real_escape_string($con,$T4); 

     $T3 = stripslashes($_REQUEST['T3']);
    $T3 = mysqli_real_escape_string($con,$T3);

     $TPA = stripslashes($_REQUEST['TPA']);
    $TPA = mysqli_real_escape_string($con,$TPA);

      $TGA = stripslashes($_REQUEST['TGA']);
    $TGA = mysqli_real_escape_string($con,$TGA);

    

   
   
        $query = "INSERT into `thyroidtest` (id,TSH,T4,T3,TPA,TGA)
VALUES ('$id','$TSH','$T4','$T3','$TPA','$TGA')";
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
<h2>Thyroid Test Report</h2>
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
<b>Test- Thyroid Test Report</b>
<br><br><br>




<table border='0'>
 

 <tr>
  <th><u>Test Name</u></th>

  <th><u>Results</u></th>
  <th><u>Units</u></th>
 <th><u>Reference</u></th>
 </tr>

    </tr>
<tr>
 <th></th>
<th></th>
 <th></th>
<th></th>
 </tr>



 


 <tr>
<td width=25%>TSH:  </th\d>
<td width=25%><input type="text" name="TSH" /></td>
<td width=25%>uIU/mL</td>
<td width=25%> 0.30 – 3.00 </td>
  <th></th>
</tr>

  </tr>
<tr>
 <th></th>
<th></th>
 <th></th>
<th></th>
 </tr>





 <tr>
 <td>Free T4:</td>
 <td><input type="text" name="T4" /></td>
 <td>ng/dL</td>
 <td>30.82 – 1.77 </td>
 </tr>

 </tr>
<tr>
 <th></th>
<th></th>
 <th></th>
<th></th>
 </tr>




<tr>
<td>Free T3: </td>
<td><input type="text" name="T3" /></td>
<td width=30%> pg/mL</td>

 <td> 2.0 – 4.4 </td>
</tr>
</tr>
<tr>
 <th></th>
<th></th>
 <th></th>
<th></th>
 </tr>


 <tr>
<td>TPO‐Ab:</td>
 <td><input type="text" name="TPA" /></td>
 <td width=30%> IU/mL</td>

<td>0-34</td>
 </tr>

</tr>
<tr>
 <th></th>
<th></th>
 <th></th>
<th></th>
 </tr>


<tr>
<td>Tg‐Ab:</td>
 <td><input type="text" name="TGA" /></td>
 <td width=30%> IU/mL</td>

 <td>0-40</td>
 </tr>
<tr>
 <th></th>
<th></th>
 <th></th>
<th></th>
 </tr>







 </table>

<button type="submit" class="submit">Submit</button>
   
    
  

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