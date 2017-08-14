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
 

<!-- Container (Request Section) -->
<form action="result.php" method="post" >
<div id="request" class="container " >
  <h3 class="text-center" >DO TEST  </h3>
  <br /><br />

    <div class="col-md-8 ">
    <?php
include 'connection.php';
$sql = "SELECT * FROM mst_question";
$result = $conn->query($sql);

 $a=0;
 $b=1;
 $rs=array();
if ($result->num_rows > 0) {
   
    while($row = $result->fetch_assoc()) {
      
      echo "Ques".$b.":".$row["que_desc"]."<br>";
      echo "<input type=radio name=".$a." value=".$row['ans1'].">".$row['ans1']."<br>";
      echo "<input type=radio name=".$a." value=".$row['ans2'].">".$row['ans2']."<br>";
      echo "<input type=radio name=".$a." value=".$row['ans3'].">".$row['ans3']."<br>";
      echo "<input type=radio name=".$a." value=".$row['ans4'].">".$row['ans4']."<br><br>";
      array_push($rs,$row['true_ans']);     
      $b++; 
      $a++;

} 

}
#print_r($rs);

?>
      <div class="row col-md-offset-5">
        <div class="col-md-7 form-group">
          <button class="btn pull-right" type="submit" name="submit">Submit</button></a>
        </div>
      </div>    
    </div>
  </div>

</form>

<!-- Footer -->
<footer class="text-center">
  <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="TO TOP">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a><br><br>
  <p>&copy; Gagan Sardana</p> 
</footer>
</body>
</html>
<?php
if (!isset($_SESSION['receiver_name']))
{
  echo '<script type="text/javascript">alert("Please Login First!")</script>';
    echo "<script> location.href='lg1.php'; </script>";
}

#print_r($rs) ;echo"<br>";


if (isset($_POST['submit'])) {
$rs1=$_POST;
#print_r($_POST);

$count=count($rs);
$d=0;
for($i=0;$i<$count;$i++)
{
    if (trim($rs[$i])==trim($rs1[$i]))
    {
      #echo "string";
     $d++;  
     }  
  
 
  }
 $_SESSION['result']=$d;
 #echo $_SESSION['result'];
 #echo $d; 
}
  
  
?>
