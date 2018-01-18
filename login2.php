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
	
max-width: 340px;
	
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

font-size: .9em;
	
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
<title>Login</title>

</head>
<body>
<?php
require('db.php');
session_start();
// If form submitted, insert values into the database.
if (isset($_POST['id'])){
        // removes backslashes
	$id = stripslashes($_REQUEST['id']);
        //escapes special characters in a string
	$id = mysqli_real_escape_string($con,$id);

	$psw = stripslashes($_REQUEST['psw']);
	$psw = mysqli_real_escape_string($con,$psw);


	//Checking is user existing in the database or not
        $query = "SELECT * FROM `users` WHERE id='$id'
and psw='$psw'";

	$result = mysqli_query($con,$query) or die(mysql_error());
	$rows = mysqli_num_rows($result);
        if($rows==1){
	    $_SESSION['id'] = $id;
            // Redirect user to index.php
	    header("Location: urinetest.php");
         }else{
	echo "<div class='form'>
<h3>Username/password is incorrect.</h3>
<br/>Click here to <a href='login2.php'>Login</a></div>";
	}
    }else{
?>
<div class="form">

<form action="" method="post" name="login">

<div class="container">
<div class="login-box ">
<div class="box-header">
<h2>Log In</h2>
</div>

<div>
<label for="id">ID</label><br>
<input type="text" name="id" required /><br>
<label for="psw">Password</label><br>
<input type="password" name="psw" placeholder="" required /><br>

<button type="submit"  value="Login"   />Login</button>
<br/>
<a href="#"><p class="small">Forgot your password?</p></a>


</div>


</div>
</div>

</div>
</form>
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