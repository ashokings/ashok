
<?php
$conn=mysqli_connect("localhost","root","","student");
$rollno=strtoupper($_POST['rollno']);
$pwd=$_POST['pwd'];
$aa=mysqli_query($conn,"select pwd from vote where rollno='$rollno'");
$pwd1=mysqli_fetch_assoc($aa);
$b=mysqli_query($conn,"select sname from vote where rollno='$rollno'");
$s=mysqli_fetch_assoc($b);

session_start();
	$_SESSION['rollno']=$rollno;
	$_SESSION['pwd']=$pwd;
	$_SESSION['name']=$s['sname'];
	if($pwd==$pwd1['pwd'])
	{
		echo "<center><b style='color:green;font-size:25;'>welcome " .$s['sname']."  .........! </b></center><br><br>";
if (strftime("%H")>=3&&strftime("%H")<11)
{
echo "<center>";
echo '<table width=100 border=0 bgcolor="yellow">';
echo '<td align="center"><a href="myvote.php" target="main"><b>My Vote</b></a></td>';
echo "</table>";
echo"</center><br><br>"; 
}
else
{
	echo "<center>";
echo '<table width=100 border=0 bgcolor="yellow">';
echo '<td align="center"><a href="results.php" target="main"><b>Results</b></a></td>';
echo "</table>";
echo"</center><br><br>";
//echo strftime("%H");
}
		echo '<form action="logout.php"><center>';
	echo '<input type="submit" value="Logout" style="font-weight:bold;"></center></form>';
	}
	else
	{
		session_destroy();
	echo "<center><b style='color:red;font-size:20;'>Enter valid credentials.........! </b></center>";
echo"<html>";
echo "<head>";
	echo'<title></title><link rel="stylesheet" type="text/css" href="Style.css">';
echo"</head>";
echo'<body><center id="main-wrapper">';
echo "<center>";
	echo'<form method="post" action="login.php">';
	echo"<b>";
		echo"<u style='color:blue;font-size:25pt;'> student login</u><br><br>";
		echo"Roll Number:&nbsp";
		echo'<input type="text" name="rollno" required><br><br>';
		echo" &nbsp &nbsp &nbspPassword:&nbsp";
		echo'<input type="Password" name="pwd" required><br><br>';
		echo'<input type="submit" name="submit" value="login">&nbsp &nbsp&nbsp &nbsp &nbsp &nbsp';
		echo'<input type="reset" name="cancel" value="cancel">';
	echo"</b>";
echo"</form>";
echo"</center>";
}	
	
?>