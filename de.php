<?php
$conn=mysqli_connect("localhost","root","","student");
session_start();
	$_SESSION['name']=$_POST['name'];
	$_SESSION['pwd']=$_POST['pwd'];
$v=mysqli_query($conn,"select count(*) from vote where cnd='vineeth'");
	$v1=mysqli_fetch_assoc($v);
	$v2=$v1['count(*)'];
	$a=mysqli_query($conn,"select count(*) from vote where cnd='ashok'");
	$a1=mysqli_fetch_assoc($a);
	$a2=$a1['count(*)'];

	if($_SESSION['pwd']=='vaas')
	{
		echo "<center><b style='color:green;font-size:25;'>welcome " .$_SESSION['name']."  .........! </b><br><br>";
		echo"<b style='color:blue;font-size:25;'>Mr.Ashok get a ".$a2. " votes.</b><br><br>";
		echo"<b style='color:blue;font-size:25;'>Mr.Vineeth get a ".$v2." votes.</b><br><br>";
		echo '<form action="logout.php"><center>';
	echo '<input type="submit" value="Logout" style="font-weight:bold;"></center></form>';
	}
	else
	{
		session_destroy();
	echo "<center><b style='color:red;font-size:20;'>Enter valid credentials.........! </b></center>";
}
  ?>