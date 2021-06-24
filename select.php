<html>
<head>
    <style>
	body {
  background-color: lightblue;
}
form{
	text-align: center;
	font-size : 18px;
}

h1 {
  color: white;
  text-align: center;
}

p {
  font-family: verdana;
  font-size: 18px;
  text-align: center;
  color:Gray;
}
</style>
	<title>display motors</title>
</head>
<body>
<h1>Angles of motors arm</h1>
<form>
<?php

$server = "localhost";
$user = "root";
$password = "";
$db = "task1";

 $con = mysqli_connect($server,$user,$password,$db)
 or die(mysqli_connect_error());
 
 $qry = mysqli_query($con , "SELECT * FROM sel1 ORDER BY id DESC LIMIT 1");

 while($reslt = mysqli_fetch_array($qry))
 {  ?>

  <p>motor1= </p> <?php echo  $reslt["motor1"]."<br/> <br/>";?>
  <p>motor2= </p> <?php echo  $reslt["motor2"]."<br/> <br/>";?>
  <p>motor3= </p> <?php echo  $reslt["motor3"]."<br/> <br/>";?>
  <p>motor4=  </p><?php echo  $reslt["motor4"]."<br/> <br/>";?>
  <p>motor5= </p> <?php echo  $reslt["motor5"]."<br/> <br/>";?>
  <p>motor6= </p> <?php echo  $reslt["motor6"]."<br/> <br/>";?>
 <?php
  }
  mysqli_close($con);
?>
</form>
</body>
</html>