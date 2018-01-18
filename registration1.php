<!DOCTYPE html>
<html>
<head>

<style>
    body
 {

background: url("https://images.pexels.com/photos/356054/pexels-photo-356054.jpeg?h=350&auto=compress&cs=tinysrgb") no-repeat center center fixed;
    
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
    
max-width: 500px;
    
margin: 0 auto;
    
position: relative;
    top: 80px;
    
padding-bottom: 30px;
    
border-radius: 5px;
    
box-shadow: 0 5px 50px rgba(0,0,0,0.4);
    
text-align: center;
}



.login-box .box-header {
    
background-color: #665851;
    
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


if (isset($_REQUEST['name'])){
        // removes backslashes
	$name = stripslashes($_REQUEST['name']);
    $name = mysqli_real_escape_string($con,$name); 

    $age = stripslashes($_REQUEST['age']);
    $age = mysqli_real_escape_string($con,$age); 

    $contact = stripslashes($_REQUEST['contact']);
    $contact = mysqli_real_escape_string($con,$contact); 

	$email = stripslashes($_REQUEST['email']);
	$email = mysqli_real_escape_string($con,$email);

	$psw = stripslashes($_REQUEST['psw']);
	$psw = mysqli_real_escape_string($con,$psw);
   
   
        $query = "INSERT into `users` (name,age,contact,email, psw)
VALUES ('$name','$age','$contact', '$email', '$psw')";
        $result = mysqli_query($con,$query);
       
        if($result){
            $last_id = $con->insert_id;
           

            echo "<div class='form'>
<h1>You are registered successfully.</h1></div>";
 echo "<h1>Your ID is: " . $last_id."</h1>";
 echo "<h1><a href='index.html'>Back </a></h1>";
        }
    }else{
?>
<div class="form">
<form name="registration" action="" method="post" >

<div class="container">
<div class="login-box ">

<div class="box-header">
<h2>Registration</h2>
</div>
   <div>
   <table>
   <tr>
   <td>&emsp;&emsp;&emsp;&emsp;     </td>
   <td><label><b>Name</b></label></td>
   <td><input type="text" placeholder="Enter your name" name="name" required></td>
   </tr>

   <tr> 
   <td></td>
   <td><label><b>Age</b></label></td>
   <td><input type="text" placeholder="Enter your age" name="age" required></td>
 
   </tr>
      
    <tr> 
    <td></td> 
    <td><label><b>Contact</b></label></td>
    <td><input type="text" placeholder="Enter your contact number" name="contact" required></td>
    </tr>

    <tr>  
    <td></td>
    <td><label><b>Email</b></label></td>
    <td><input type="text" placeholder="Enter your Email ID" name="email" required></td>
    </tr>

    <tr>
    <td></td>
    <td><label><b>Password</b></label></td>
    <td><input type="password" placeholder="Enter Password" name="psw" required></td>
    </tr>

    </table>
     
      <button type="button" class="cancelbtn" >Cancel</button>
      <button type="submit" class="signupbtn">Sign Up</button>
      
    
  

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