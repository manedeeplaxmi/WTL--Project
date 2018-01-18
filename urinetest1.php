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

    $color = stripslashes($_REQUEST['color']);
    $color = mysqli_real_escape_string($con,$color); 

    $appearance = stripslashes($_REQUEST['appearance']);
    $appearance = mysqli_real_escape_string($con,$appearance); 

     $glucose = stripslashes($_REQUEST['glucose']);
    $glucose = mysqli_real_escape_string($con,$glucose); 

     $bilirubin = stripslashes($_REQUEST['bilirubin']);
    $bilirubin = mysqli_real_escape_string($con,$bilirubin); 

     $ketone = stripslashes($_REQUEST['ketone']);
    $ketone = mysqli_real_escape_string($con,$ketone); 

     $SG = stripslashes($_REQUEST['SG']);
    $SG = mysqli_real_escape_string($con,$SG); 

     $PH = stripslashes($_REQUEST['PH']);
    $PH = mysqli_real_escape_string($con,$PH); 

         $protein = stripslashes($_REQUEST['protein']);
    $protein = mysqli_real_escape_string($con,$protein); 

       $nitrite = stripslashes($_REQUEST['nitrite']);
    $nitrite = mysqli_real_escape_string($con,$nitrite); 


   
   
        $query = "INSERT into `urinetest` (id,color,appearance,glucose,bilirubin,ketone,SG,PH,protein,nitrite)
VALUES ('$id','$color','$appearance','$glucose','$bilirubin','$ketone','$SG','$PH','$protein','$nitrite')";
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
<h2>Urine Test</h2>
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


<b>Test- URINALYSIS</b>
<br><br><br>






 <table border='0'>
 

  <tr>
  <th><u>Test Name</u></th>
  <th><u>Results</u></th>
  <th><u>Reference</u></th>
  </tr>

  <tr>
  <th></th>
 <th></th>
  <th></th>
 <th></th>
  </tr>

<tr>
 <th width=35%>color</th>
 <th width=35%><input type="text" name="color" /></th>
<th width=30%>Yellow</th>
 <th></th>
 </tr>

  <tr>
  <th></th>
 <th></th>
  <th></th>
 <th></th>
  </tr>




 <tr>
 <th>Appearance</th>
 <th><input type="text" name="appearance" /></th>
 <th>clear</th>
 </tr>

  <tr>
  <th></th>
 <th></th>
  <th></th>
 <th></th>
  </tr>

 <tr>
 <th>Glucose</th>
 <th><input type="text" name="glucose" /></th>

 <th>Negative</th>
 </tr>

 <tr>
  <th></th>
 <th></th>
  <th></th>
 <th></th>
  </tr>

 <tr>
<th>Bilirubin</th>
 <th><input type="text" name="bilirubin" /></th>
 
<th>Negative</th>
 </tr>

 <tr>
  <th></th>
 <th></th>
  <th></th>
 <th></th>
  </tr>

 <tr>
<th>Ketone</th>
 <th><input type="text" name="ketone" /></th>

 <th>Negative</th>
</tr>

  <tr>
  <th></th>
 <th></th>
  <th></th>
 <th></th>
  </tr>

<tr>
<th>Spec Grav</th>
 <th><input type="text" name="SG" /></th>

<th>1.003-1.035</th>

 <tr>
  <th></th>
 <th></th>
  <th></th>
 <th></th>
  </tr>


  <tr>
 <th>PH</th>
 <th><input type="text" name="PH" /></th>

 <th>5.0-8.0</th>



 

 <tr>
 <th>Protein</th>
 <th><input type="text" name="protein" /></th>

<th>Negative</th>

 <tr>
 <th></th>
 <th></th>
 <th></th>
 <th></th>
 </tr>


  <tr>
 <th>Nitrite</th>
<th><input type="text" name="nitrite" /></th>

<th>Negative</th>



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