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






table,th,td {
  border : 1px solid black;
  border-collapse: collapse;
}
th,td {
  padding: 5px;
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
   
 





 




<div class="form">
<form name="registration" action="" method="post" >
  <div class="container__child signup__form">
 <br><br>

<p id='costshow'></p><br> 
  <table align="center">
  <tr>
    <th width="15%">Test Name</th>
    <th width="15%">Cost</th>
  </tr>
    <td>CBC</td>
    <td>Rs.100</td>
  <tr>
    <td>Urine</td>
    <td>Rs.300</td>
  </tr>
    <tr>
    <td>Vitamin D</td>
    <td>Rs.300</td>
  </tr>
  <tr>
    <td>Blood sugar</td>
    <td>Rs.100</td>
  </tr>
  </table>
  <br>

   Select Test:
    <select name="test_name" onchange="showCost(this.value)">
  <option value="CBC">CBC</option>
  <option value="URINE">URINE</option>
  <option value="VITAMIN D">VITAMIN D</option>
  <option value="BLOOD SUGAR">BLOOD SUGAR</option>
</select>
<br>
<div id="costshow"></div>
<br>
     <div class="form-group">
        <label for="date">Date</label>
        <input class="form-control" type="date" name="date" id="date" />
      </div>
  <div class="form-group">  
    <br>Select Time:
    <select name="slot">
        <option value="1">9:00-10:00am</option>
        <option value="2">10:00-11:00am</option>
        <option value="3">11:00am-12:00noon</option>
        <option value="4">1:00pm-2:00pm</option>
      </select>

  </table>
      
      <div class="m-t-lg">
        <ul class="list-inline">
          <li>
            <input class="btn btn--form" type="submit" value="confirm appointment" />
          </li>
        </ul>
      </div>
  
  </div>
</div>
 

 </form>




 

  


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