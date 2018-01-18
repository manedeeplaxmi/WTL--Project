<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Spectre sign up form</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.min.css'>
<link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,300'>
<link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Roboto:400,700,300'>
<link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css'>

      <link rel="stylesheet" href="css/style1.css">

  
</head>

<body>

  <?php
require('db.php');
session_start();

$ID= $_SESSION['id'];

if (isset($_REQUEST['name'])){
        // removes backslashes
  $name = stripslashes($_REQUEST['name']);
    $name = mysqli_real_escape_string($con,$name); 

     $email = stripslashes($_REQUEST['email']);
  $email = mysqli_real_escape_string($con,$email);

    $age = stripslashes($_REQUEST['age']);
    $age = mysqli_real_escape_string($con,$age); 

    $contact = stripslashes($_REQUEST['contact']);
    $contact = mysqli_real_escape_string($con,$contact); 



 


   
   
        $query = "INSERT into `appointment` (id,time_slot,name,email,age,contact)
VALUES ('$ID','8:00-8:30','$name', '$email','$age','$contact')";
        $result = mysqli_query($con,$query);
       
        if($result){
            $last_id = $con->insert_id;
           

            echo "<div class='form'>
<h1>You are registered successfully.</h1></div>";

 echo "<h1><a href='index.html'>Back </a></h1>";
        }
    }else{
?>

<div class="form">
<form name="registration" action="" method="post" >
  <div class="signup__container">
  <div class="container__child signup__thumbnail">
    <div class="thumbnail__logo">
      <svg class="logo__shape" width="25px" viewBox="0 0 634 479" xmlns="http://www.w3.org/2000/svg">
      </svg>
      <h1 class="logo__text"></h1><br>
      <h1 class="logo__text"></h1><br>
      <h1 class="logo__text"></h1><br>
       <h1 class="logo__text"></h1><br>
      <h1 class="logo__text"></h1><br>
      <h1 class="logo__text">Dr.Deepa Mane</h1><br>
      <h1 class="logo__text">BAMS</h1><br>
      <h1 class="logo__text">Homeopath</h1>
    </div>
    <div class="thumbnail__content text-center">
      <img src="img\deepa.jpg" alt="Smiley face" width="100" height="100"></img>
      <h3 class="heading--primary">Vashi clinic</h3>
      <h6 >B2/5/23, Sector-15, Vashi, Navi Mumbai - 400703, Navi Mumbai</h6>
    </div>
    <div class="thumbnail__links">
      <ul class="list-inline m-b-0 text-center">
        <li><a href="http://alexdevero.com/" target="_blank"><i class="fa fa-globe"></i></a></li>
        <li><a href="https://www.behance.net/alexdevero" target="_blank"><fa class="fa fa-behance"></fa></a></li>
        <li><a href="https://github.com/alexdevero" target="_blank"><i class="fa fa-github"></i></a></li>
        <li><a href="https://twitter.com/alexdevero" target="_blank"><i class="fa fa-twitter"></i></a></li>
      </ul>
    </div>
    <div class="signup__overlay"></div>
  </div>
  <div class="container__child signup__form">

     <div class="form-group">
       <label for="Name"></label>
        <input class="form-control" type="text" name="Name" id="Name" placeholder="" required />
      </div>
  
      <div class="form-group">
       <b><b> <b><label for="Name">Name</label></b></b></b>
        <input class="form-control" type="text" name="Name" id="Name" placeholder="Rutuja Nighot" required />
      </div>
      <div class="form-group">
        <b><b> <b><label for="email">Email</label></b></b></b>
        <input class="form-control" type="text" name="email" id="email" placeholder="rutu.nihot@gmail.com" required />
      </div>
      <div class="form-group">
        <b><b> <b><label for="age">Age</label></b></b></b>
        <input class="form-control" type="text" name="age" id="age" placeholder="21" required />
      </div>
      <div class="form-group">
        <b><b> <b><label for="contact">Contact</label></b></b></b>
        <input class="form-control" type="text" name="contact" id="contact" placeholder="9870216239" required />
      </div>


      <div class="m-t-lg">
        <ul class="list-inline">
          <li>
            <input class="btn btn--form" type="submit" value="confirm appointment" />
          </li>
          <li>
          
          </li>
        </ul>
      </div>
   
  </div>
</div>

</form>


</div> 
 <?php } ?>
  
  
</body>
</html>
