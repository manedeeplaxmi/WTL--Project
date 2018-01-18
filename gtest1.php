<!doctype html>

<head>
  <meta charset="utf-8">

  
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <title>SUSHRUSHA-Healthcare delivered online...</title>
  <meta name="description" content="" />
  <meta name="keywords" content="" />
  <meta name="author" content="humans.txt">

  <link rel="shortcut icon" href="favicon.png" type="image/x-icon" />

  <!-- Facebook Metadata /-->
  <meta property="fb:page_id" content="" />
  <meta property="og:image" content="" />
  <meta property="og:description" content=""/>
  <meta property="og:title" content=""/>

  <!-- Google+ Metadata /-->
  <meta itemprop="name" content="">
  <meta itemprop="description" content="">
  <meta itemprop="image" content="">

  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">

 
  <link rel="stylesheet" href="css/gumby.css">
  
  <script src="js/libs/modernizr-2.6.2.min.js"></script>
</head>

<style>
  html, body {
    background: #fefefe;
  }

  .column, .columns, .tiles > li {
    background: #ddd;
        border: 1px solid #d0d0d0;
    -webkit-transition-duration: .3s;
    -moz-transition-duration: .3s;
    -o-transition-duration: .3s;
    -ms-transition-duration: .3s;
    transition-duration: .3s;
  }

  .column:hover, .columns:hover {
    background: #efefef;
    cursor: pointer;
    -webkit-transition-duration: .3s;
    -moz-transition-duration: .3s;
    -o-transition-duration: .3s;
    -ms-transition-duration: .3s;
    transition-duration: .3s;
  }

  .row {
    margin-bottom: 25px;
    text-align: center;
  }

  h1, h2 {
    font: bold italic 110px georgia, times new roman, serif;
    color: #cc0000;
    letter-spacing: -.09em;
    -webkit-transition-duration: 1s;
  }

  h2  {
    font-size: 21px;
    font-weight: normal;
    line-height: 1.6;
  }

  p {
    font-size: 16px;
    line-height: 60px;
    margin-bottom: 0;
    color: #555;

    -webkit-transition-duration: .2s;
    -moz-transition-duration: .2s;
    -o-transition-duration: .2s;
    -ms-transition-duration: .2s;
    transition-duration: .2s;
  }

  .column:hover p, .columns:hover p {
    font-size: 25px;
    font-weight: bold;

    -webkit-transition-duration: .2s;
    -moz-transition-duration: .2s;
    -o-transition-duration: .2s;
    -ms-transition-duration: .2s;
    transition-duration: .2s;
  }

  .head, .head:hover {
    box-shadow: none;
    margin-top: 30px;
  }

  .head span {
    font-weight: bold;
    color: #353535;
  }

  .head span span {
    font-size: 32px;
    font-weight: bold !important;
  }

  a {
    color: #d04526;
  }

  a:hover {
    text-decoration:underline;
  }

  .special, .special:hover {
    background: transparent;
        border: none;
  }

  .special:hover p {
    color: #ffe400;
  }

  @media only screen and (max-width: 767px) {

    h1 {
      font: bold italic 100px georgia, times new roman, serif;
      -webkit-transition-duration: .5s;
    }

  }


</style>

<body>

  <?php
  require('db.php');
  ?>

  <div class="row">
    <div class="twelve columns special head">
      <h1>SUSHRUSHA</h1>
      <h2>Healthcare delivered online...</h2>
      
    </div>
  </div>

  <div class="row">
    <div class="twelve columns">
      <form method="get" action="cbctest1.php">
      <p><button type="submit">CBC</button></p>
      </form>
    </div>
  </div>

 <div class="row">
    <div class="twelve columns">
       <form method="get" action="urinetest1.php">
      <button type="submit">URINE TEST</button>
      </form>
    </div>
  </div>

 <div class="row">
    <div class="twelve columns">
        <form method="get" action="vitDtest1.php">
      <p><button type="submit" >VITAMIN D TEST</button></p>
    </form>
    </div>
  </div>

 <div class="row">
    <div class="twelve columns">
      <form method="get" action="bstest1.php">
      <p><button type="submit" >BLOOD SUGAR TEST REPORT</button></p>
    </form>
    </div>
  </div>

  <div class="row">
    <div class="twelve columns">
      <form method="get" action="cumulativetest1.php">
      <p><button type="submit" >CUMULATIVE TEST REPORT</button></p>
    </form>
    </div>
  </div>

   <div class="row">
    <div class="twelve columns">
      <form method="get" action="thyroidtest1.php">
      <p><button type="submit" >THYROID TEST REPORT</button></p>
    </form>
    </div>
  </div>



  

  </section>


  
  <script>
  var oldieCheck = Boolean(document.getElementsByTagName('html')[0].className.match(/\soldie\s/g));
  if(!oldieCheck) {
    document.write('<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"><\/script>');
  } else {
    document.write('<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"><\/script>');
  }
  </script>
  <script>
  if(!window.jQuery) {
    if(!oldieCheck) {
      document.write('<script src="js/libs/jquery-2.0.2.min.js"><\/script>');
    } else {
      document.write('<script src="js/libs/jquery-1.10.1.min.js"><\/script>');
    }
  }
  </script>

  
  <script gumby-touch="js/libs" src="js/libs/gumby.js"></script>
  <script src="js/libs/ui/gumby.retina.js"></script>
  <script src="js/libs/ui/gumby.fixed.js"></script>
  <script src="js/libs/ui/gumby.skiplink.js"></script>
  <script src="js/libs/ui/gumby.toggleswitch.js"></script>
  <script src="js/libs/ui/gumby.checkbox.js"></script>
  <script src="js/libs/ui/gumby.radiobtn.js"></script>
  <script src="js/libs/ui/gumby.tabs.js"></script>
  <script src="js/libs/ui/gumby.navbar.js"></script>
  <script src="js/libs/ui/jquery.validation.js"></script>
  <script src="js/libs/gumby.init.js"></script>

  

  <script src="js/plugins.js"></script>
  <script src="js/main.js"></script>

  

 
</body>
</html>