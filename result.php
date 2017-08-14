<?php


if (session_status() != PHP_SESSION_ACTIVE) {
    session_start();

}


?>
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
  <link rel="stylesheet" href="css/style3.css">
  <script src="js/top.js"></script>
</head>
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
      <a class="navbar-brand" href=""><img src="logo.gif" width="30" height="30"></a>
    </div>
    <ul class="nav navbar-nav navbar-left">
    <li><a>WELCOME <?php echo isset($_SESSION['receiver_name'])?$_SESSION['receiver_name']:'' ?></a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">       
    </ul>
  </div>
</nav>
<form action="logout.php" method="post" >
<div id="request" class="container " >
  <h3 class="text-center" >RESULT  </h3>
  <br /><br />
<?php
if (!isset($_SESSION['receiver_name']))
{
  echo '<script type="text/javascript">alert("Please Login First.And Do Test!")</script>';
    echo "<script> location.href='lg1.php'; </script>";
}
if(!isset($_SESSION['result']))
{
$b=0;

echo "<p class=text-justify>YOUR SCORE :".$b."<p>";
}
else{
	# code...
$a=$_SESSION['result'];
echo "<p class=text-justify>YOUR SCORE :".$a."<p>";
}
?>
      <div class="row col-md-offset-5">
        <div class="col-md-7 form-group">
          <button class="btn pull-right" type="submit" name="submit">EXIT</button></a>
        </div>
      </div>    
    </div>
  </div>

</form>
</body>
</html>

