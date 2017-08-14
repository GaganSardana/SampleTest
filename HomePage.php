<!DOCTYPE html>
<html lang="en">
<head>
  <title>THINK EXAM</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/style1.css">
  <script src="js/top.js"></script>
   
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#myPage"><img src="logo.gif" width="30" height="30"></a>
    </div>
    <ul class="nav navbar-nav navbar-right">
        <li class="active"><a href="#myPage">HOME</a></li>
        <li><a href="#aboutus">ABOUT US</a></li>
         <li><a href="HomePage.php#contact">CONTACT</a></li>
        <li><a href="lg1.php"><span class="glyphicon glyphicon-log-in"></span> LOGIN</a></li>
        <li><a href="Rregister.php"><span class="glyphicon glyphicon-user"></span> SIGN UP</a></li>
    </ul>
  </div>
</nav>
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="1.png" alt="" width="1200" height="700">
      </div>

      <div class="item">
        <img src="2.jpg" alt="" width="1200" height="700">
              
      </div>
    
      <div class="item">
        <img src="3.jpg" alt="" width="1200" height="700">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>  
<!-- Container (About Us Section) -->
<div id="aboutus" class="container text-center">
  <h3>ABOUT US</h3>
  <p class="text-justify">Think exam is an Online Examination system, brought to you by Ginger Webs Pvt. Ltd. It was designed with a mission to strive for excellence, with an expertise in driving assessments in the educational domain. We prioritize quality customer experience with a goal to conduct test online assuring minimal human-intervention.</p>
  <p class="text-justify">We provide the management of examination and assessment, using an advanced hassle-free transactional interface. The streamlined process flow help with the easy creation of tests, circulation of products, calculation of scores, etc. It provides development of an improved communication link in-between the assessor and the assessee. Multiple tests can be clubbed together to form a product that can be purchased by the candidate and would contribute to the revenue generation. Secured flow of information, multiple payment gateway options, synchronized android and iOS interface will take you to the next level of examination. The panel is self- operational that requires simple online subscription that is extremely easy to use and learn.</p>

  <p class="text-justify">Now, perform exams meeting your requirements to restrict and liberate the movement, depute timelines, transparency of the text, shuffle and randomize, define guidelines, use tags assuring smoother search, allocate penalty on incorrect attempts, and more wherever and whenever you want to.</p>  
</div>
<!-- Container (Contact Section) -->
<form action="" method="post">
<div id="contact" class="container">
  <h3 class="text-center">CONTACT</h3>
  <br /><br />

  <div class="row">
    <div class="col-md-4">
      
      <p><span class="glyphicon glyphicon-map-marker"></span>Chicago, US</p>
      <p><span class="glyphicon glyphicon-phone"></span>Phone: +00 1515151515</p>
      <p><span class="glyphicon glyphicon-envelope"></span>Email: mail@mail.com</p>
    </div>
    <div class="col-md-8">
      
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea>
      <br>
      <div class="row">
        <div class="col-md-12 form-group">
          <button class="btn pull-right" type="submit">Send</button>
        </div>
      </div>
         
    </div>
  </div>
</div>
</form>
<!--php code for contact -->
<?php
#error_reporting(E_ERROR | E_PARSE);
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$name=$_POST['name'];
$email=$_POST['email'];
$comments=$_POST['comments'];

require 'connection.php';

$sql = "INSERT INTO contact (Name,Email,Comment)
VALUES ('$name', '$email', '$comments')";

if ($conn->query($sql) === TRUE) {
    echo '<script type="text/javascript">alert("Thank You For Your Contribution . It Means ALot To Us!")</script>';
    echo "<script> location.href='HomePage.php'; </script>";
  }
$conn->close();
}
?>


<!-- Footer -->
<footer class="text-center">
  <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="TO TOP">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a><br><br>
  <p>&copy; Gagan Sardana</p> 
</footer>
</script>
</body>
</html>