<html>
<title>save data</title>
<style>
body {
  background-color: lightblue;
  text-align: center;
  font-size: 25px;
  color: white;
}

</style>
<body>
<?php


$server = "localhost";
$user = "root";
$password = "";
$db = "task1";



$con = mysqli_connect($server,$user,$password,$db)
 or die(mysqli_connect_error());
     
$motor1=$_POST['motor1'];
$motor2=$_POST['motor2'];
$motor3=$_POST['motor3'];
$motor4=$_POST['motor4'];
$motor5=$_POST['motor5'];
$motor6=$_POST['motor6'];

$sql = "INSERT INTO sel1 ( motor1 , motor2,motor3,motor4,motor5,motor6) VALUES ('$motor1', '$motor2','$motor3','$motor4','$motor5','$motor6')";
if(mysqli_query($con, $sql)){ 
	echo " Data saved successfully ";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
}
 
// Close connection
mysqli_close($con);

?>
<form action="select.php" method="post">
<button type="submit">RUN</button></form>
<form action="new.php" method="post">
<button type="submit">BACK</button></form>
</body>
</html>